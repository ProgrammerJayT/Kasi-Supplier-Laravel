<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AccountControl;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardControl extends Controller
{
    //
    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);
        $account = AccountControl::show($user->email);

        $accountType == 'vendor' ? $items = Item::where('ven_id', '==', $myID)->count() : $items = null;

        //Get all unpaid orders
        $unpaidOrders = Order::where('account_id', $account->id)
            ->where('status', 'unpaid')
            ->count();

        return view('dashboard.' . $accountType . '-dashboard', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
            'items' => $items,
        ]);
    }
}
