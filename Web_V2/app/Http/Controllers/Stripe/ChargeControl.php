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
        $line1 = $rawAddress[0]['long_name'] . ' ' . $rawAddress[1]['long_name'] . ' ' . $rawAddress[2]['long_name'];
        $line2 = $rawAddress[3]['long_name'];
        $city = $rawAddress[4]['long_name'];
        $state = $rawAddress[5]['long_name'];
        $country = $rawAddress[6]['long_name'];
        $code = $rawAddress[7]['long_name'];

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
                        'line1' => $line1,
                        'line2' => $line2,
                        'city' => $city,
                        'state' => $state,
                        'country' => $country,
                        'postal_code' => $code,
                    ],
                ],
            ]);

            return response($charge->id, 201);


            //Display error for failed charge
        } catch (\Exception $e) {
            return response($e->getMessage(), 403);
        }
    }
}
