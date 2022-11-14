<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;

class SalesControl extends Controller
{
    //
    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view(ucfirst($accountType) . '-ops.view-sales', [
            'name' => $user->name,
            'image' => $user->image,
            'user' => $accountType,
        ]);
    }
}
