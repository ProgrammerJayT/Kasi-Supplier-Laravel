<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ShoppingControl extends Controller
{
    //
    public function show(Request $request)
    {
        $user = User::show($request->user, session()->get('user'));

        return view('shopping', [
            'name' => $user->name,
            'id' => $user->id,
            'user' => $request->user,
            'image' => $user->image,
        ]);
    }

    public function editItem(Request $request)
    {
        $user = User::show($request->user, session()->get('user'));

        return view('vendor-ops.edit-item', [
            'name' => $user->name,
            'image' => $user->image,
        ]);
    }
}
