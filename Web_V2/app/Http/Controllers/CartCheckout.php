<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartCheckout extends Controller
{
    //
    public function show(Request $request)
    {
        $userInfo = User::show($request->user, session()->get('user'));

        return view('checkout', [
            'user' => $request->user,
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
        // $request->validate([
        //     'card number' => 'required|size:16|numeric',
        //     //'expiry' => 'min:now',
        // ]);
    }
}
