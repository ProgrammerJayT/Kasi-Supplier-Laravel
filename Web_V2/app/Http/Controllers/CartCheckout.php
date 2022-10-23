<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Stripe\BankCardControl;
use App\Http\Controllers\Stripe\ChargeControl;
use App\Models\Order;
use App\Models\OrderDelivery;
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
        //Initialize user info
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $userInfo = User::show($accountType, $myID);
        $rawAddress = '';
        $latLng = '';

        $request->validate([
            'cardNumber' => 'required|size:16',
            'cardExpiry' => 'required',
            'cardCvc' => 'required|size:3',
            'deliveryAddress' => 'required_if:deliveryChoice,==,true',
        ]);

        if ($request->deliveryChoice == 'on') {

            $rawCoords = json_decode($request->input('set-address'), true);

            session()->put('isDelivery', true);

            //Update delivery status to true
            $updateOrder = Order::find(session()->get('new-order')['id']);

            $updateOrder->is_delivery = true;

            if ($updateOrder->save()) {
                $createDelivery = OrderDeliveryControl::create(
                    session()->get('new-order')['id'],
                    $request->location,
                    $rawCoords['lat'] . ',' . $rawCoords['lng'],
                    100
                );
            }

            $latLng = json_decode($request->input('set-address'), true);

            //Go reverse geocode to get address
            try {
                $response = Http::get(
                    'https://maps.googleapis.com/maps/api/geocode/json?latlng=' . $latLng['lat'] . ',' . $latLng['lng'] . '&location_type=ROOFTOP&result_type=street_address&key=AIzaSyColBQqGsiDgBrMtcp3GSVbVQWOW9TNe_0'
                );

                $rawAddress = $response->json()['results'][0]['address_components'];
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }

        $createCardTokenData = [
            'card_number' => $request->cardNumber,
            'exp_month' => explode('-', $request->cardExpiry)[1],
            'exp_year' => explode('-', $request->cardExpiry)[0],
            'card_cvc' => $request->cardCvc,
        ];

        if (BankCardControl::create($createCardTokenData)->getStatusCode() == 201) {
            $bankCardResponse = json_decode(BankCardControl::create($createCardTokenData)->content(), true);
            $cardToken = $bankCardResponse['data']['id'];

            $createChargeData = [
                'amount' => ((int)session()->get('new-order')['total']) * 100,
                'email' => $userInfo->email,
                'token' => $cardToken,
                'address' => $rawAddress,
                'name' => $userInfo->name . ' ' . $userInfo->surname,
            ];

            if (ChargeControl::create($createChargeData)->getStatusCode() == 201) {

                return redirect()->route('success');
            } else {
                return redirect()->back()->with('error', 'Failed to charge card. ' . ChargeControl::create($createChargeData)->content());
            }
        } else {
            return back()->with('error', BankCardControl::create($createCardTokenData)->getOriginalContent()['message']);
        }
    }

    public function success()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $userInfo = User::show($accountType, $myID);

        session()->forget('cartItems');
        session()->forget('new-order');

        session()->has('isDelivery') ? $isDelivery = true : $isDelivery = false;
        session()->forget('isDelivery');

        return view('payment-success', [
            'user' => $accountType,
            'name' => $userInfo->name,
            'image' => $userInfo->image,
            'userInfo' => $userInfo,
            'isDelivery' => $isDelivery
        ]);
    }
}
