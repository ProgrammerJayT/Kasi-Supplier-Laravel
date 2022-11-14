<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;

class WishlistControl extends Controller
{
    //
    public function show(Request $request)
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view('wishlist', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
        ]);
    }
}
