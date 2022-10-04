<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerControl extends Controller
{
    //
    public function dashboard() {
        
        $user = Customer::where('id', session()->get('user'))->first();
        $name = $user->name;
        $surname = $user->surname;
        $fullName = $name . " " . $surname;
        $dateJoined = $user->created_at->toDateString();

        return view('dashboard.customer', [
            'name' => $name,
            'surname' => $surname,
            'fullName' => $fullName,
            'dateJoined' => $dateJoined,
        ]);
    }
}
