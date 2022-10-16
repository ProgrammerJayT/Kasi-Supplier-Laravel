<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Stripe\StripeClient;

class CartCheckout extends Controller
{
    //
    public function show(Request $request)
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];


        $userInfo = User::show($accountType, $myID);

        return view('checkout', [
            'user' => $accountType,
            'name' => $userInfo->name,
            'image' => $userInfo->image,
            'userInfo' => $userInfo,
            'cart' => session()->has('cartItems') ? session()->get('cartItems') : array(),
            'items' => ShoppingItems::index()->original,
            'total' => $request->total
        ]);
    }

    public function checkout(Request $request)
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $request->validate([
            'cardNumber' => 'required|size:16',
            'cardExpiry' => 'required',
            'cardCvv' => 'required|size:3',
            'deliveryAddress' => 'required_if:deliveryChoice,==,true',
        ]);

        //JSON decode address
        $latLng = json_decode($request->input('set-address'), true);

        //Initialize user info
        $userInfo = User::show($accountType, $myID);

        //Go reverse geocode to get address
        try {
            $response = Http::get(
                'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $latLng['lat'] . ',' . $latLng['lng'] . '&location_type=ROOFTOP&result_type=street_address&key=AIzaSyColBQqGsiDgBrMtcp3GSVbVQWOW9TNe_0'
            );
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        $rawAddress = $response->json()['results'][0]['address_components'];
        $streetAddress = $rawAddress[0]['long_name'] . ' ' . $rawAddress[1]['long_name'];

        //Stripe
        $stripeClient = new StripeClient([
            'api_key' => env('STRIPE_SECRET'),
        ]);

        //Create card token
        try {
            $token = $stripeClient->tokens->create([
                'card' => [
                    'number' => $request->cardNumber,
                    'exp_month' => explode('-', $request->cardExpiry)[1],
                    'exp_year' => explode('-', $request->cardExpiry)[0],
                    'cvc' => $request->cardCvv,
                ],
            ]);


            //Create charge
            try {
                $charge = $stripeClient->charges->create([
                    'amount' => 1500,
                    'currency' => 'zar',
                    'source' => $token->id,
                    'description' => 'Charge for ' . User::show($accountType, $myID)->email,
                    'receipt_email' => User::show($accountType, $myID)->email,
                    'shipping' => [
                        'name' => $userInfo->name,
                        'phone' => null,
                        'address' => [
                            'line1' => $streetAddress,
                            'city' => $rawAddress[4]['long_name'],
                            'state' => $rawAddress[5]['long_name'],
                            'country' => $rawAddress[6]['long_name'],
                            'postal_code' => $rawAddress[7]['long_name'],
                        ],
                    ],
                ]);


                //Display error for failed charge
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }

            //Display error for card token creation failure21
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function success()
    {
        return view('payment-success');
    }
}
