<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class OrdersControl extends Controller
{
    //
    public function show() {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view('orders', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
        ]);
    }

    public function create() {
        
    }
}
