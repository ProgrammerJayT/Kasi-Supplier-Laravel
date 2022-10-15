<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardControl extends Controller
{
    //
    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        $accountType == 'vendor' ? $items = Item::where('ven_id', '==', $myID)->count() : null;

        return view('dashboard.' . $accountType . '-dashboard', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
            'items' => $items,
        ]);
    }
}
