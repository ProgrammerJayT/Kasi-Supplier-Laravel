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
        $user = User::show($request->user, session()->get('user'));

        return view('cart', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $request->user,
        ]);
    }
}
