<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AccountControl;
use App\Models\Order;
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
        $account = AccountControl::show($user->email);
        
        $orders = Order::where('account_id', $account->id)->get();

        return view('orders', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
            'orders' => $orders,
        ]);
    }

    public function create(Request $request)
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);
        $account = AccountControl::show($user->email);

        $createOrder = new Order;
        $createOrderItems = new OrderItems;
        $orderItems = array();

        $createOrder->account_id = $account->id;
        $createOrder->date = now()->toDateString();
        $createOrder->amount = $request->total;
        $createOrder->num_items = count(session()->get('cartItems'));

        if ($createOrder->save()) {

            for ($i = 0; $i < count(session()->get('cartItems')); $i++) {

                $orderItems[$i] = [
                    'order_id' => $createOrder->id,
                    'item_id' => session()->get('cartItems')[$i],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $createOrderItems::insert($orderItems[$i]);
            }

            $newOrder = [
                'id' => $createOrder->id,
                'total' => $request->total,
            ];

            session()->put('new-order', $newOrder);

            return redirect('/order-confirmation')->with('order-created', 'Your order was successfully created');
        } else {
            return back()->with('order-fail', 'Your order was unsuccessful');
        }
    }

    public function confirm(Request $request)
    {
        $myId = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $userInfo = User::show($accountType, $myId);


        return view('order-confirmation', [
            'user' => $accountType,
            'orderId' => session()->get('new-order')['id'],
            'total' => session()->get('new-order')['total'],
            'name' => $userInfo->name,
            'image' => $userInfo->image,
        ]);
    }
}
