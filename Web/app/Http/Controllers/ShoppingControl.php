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
        //Get user's ID and their account type
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        //Get user's information
        $user = User::show($accountType, $myID);

        return view('shopping', [
            'name' => $user->name,
            'id' => $user->id,
            'user' => $accountType,
            'image' => $user->image,
        ]);
    }

    public function editItem()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $userInfo = User::show($accountType, $myID);

        return view('vendor-ops.edit-item', [
            'name' => $userInfo->name,
            'image' => $userInfo->image,
        ]);
    }
}
