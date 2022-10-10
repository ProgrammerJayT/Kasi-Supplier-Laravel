<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Customer;
use Illuminate\Http\Request;

class WishlistControl extends Controller
{
    //
    public function show(Request $request)
    {
        return view($request->user . '-ops.view-wishlist', [
            'name' => $request->user == 'vendor' ?
                Vendor::where('id', session()->get('user'))->first()->name
                :
                Customer::where('id', session()->get('user'))->first()->name,
        ]);
    }
}
