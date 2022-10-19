<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Order;
use App\Models\orderDelivery;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrdersControl extends Controller
{
    //
    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view('orders', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
        ]);
    }

    public function create(Request $request)
    {
        $createOrder = new Order;
        $createOrderItems = new OrderItems;
        $orderItems = array();
        $testAddress = '226 West Street, Pretoria North';
        $testDistance = 596;

        $createOrder->buyer_id = session()->get('user')['id'];
        $createOrder->date = now()->toDateString();
        $createOrder->amount = $request->total;
        $createOrder->num_items = count(session()->get('cartItems'));

        if ($createOrder->save()) {

            $createOrder->is_delivery ? OrderDeliveryControl::create(
                $createOrder->id,
                $testAddress,
                $testDistance
            ) : null;

            for ($i = 0; $i < count(session()->get('cartItems')); $i++) {

                $orderItems[$i] = [
                    'order_id' => $createOrder->id,
                    'item_id' => session()->get('cartItems')[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $createOrderItems::insert($orderItems[$i]);
            }

            return redirect('/order-confirmation')->with('order-created', 'Your order was successfully created');
        } else {
            return back()->with('order-fail', 'Your order was unsuccessful');
        }
    }

    public function confirm()
    {
        return "Confirmation page";
    }
}
