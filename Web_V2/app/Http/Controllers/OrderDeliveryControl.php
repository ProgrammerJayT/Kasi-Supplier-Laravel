<?php

namespace App\Http\Controllers;

use App\Models\OrderDelivery;
use Illuminate\Http\Request;

class OrderDeliveryControl extends Controller
{
    //
    public static function create($orderId, $address, $distance)
    {
        $createOrderDelivery = new OrderDelivery();

        $createOrderDelivery->order_id = $orderId;
        $createOrderDelivery->address = $address;
        $createOrderDelivery->distance = $distance;

        $createOrderDelivery->save() ? $response = [
            'status' => 201,
            'message' => 'Delivery successfully scheduled',
        ] : [
            'status' => 424,
            'message' => 'Failed to schedule delivery',
        ];

        return $response;
    }
}
