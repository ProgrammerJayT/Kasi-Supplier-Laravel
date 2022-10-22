<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class ChargeControl extends Controller
{
    //
    public static function create($data)
    {
        //
        $stripeClient = new StripeClient(env('STRIPE_SECRET'));

        $rawAddress = $data['address'];
        $line1 = $rawAddress[0];

        dd($data, $rawAddress, $line1);

        //Create charge
        try {
            $charge = $stripeClient->charges->create([
                'amount' => $data['amount'],
                'currency' => 'zar',
                'source' => $data['token'],
                'description' => 'No description for test charges',
                'receipt_email' => $data['email'],
                'shipping' => [
                    'name' => $data['name'],
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
    }
}
