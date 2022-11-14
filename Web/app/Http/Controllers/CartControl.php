<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Customer;
use Illuminate\Http\Request;

class CartControl extends Controller
{
    //
    public function show(Request $request)
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view('cart', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
        ]);
    }
}
