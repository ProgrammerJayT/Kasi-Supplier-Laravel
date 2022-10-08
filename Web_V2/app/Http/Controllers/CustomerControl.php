<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerControl extends Controller
{
    //
    public function index()
    {
        $user = Customer::where('id', session()->get('user'))->first();
        return $user;
    }

    public function dashboard()
    {

        return view('dashboard.customer-dashboard', [
            'name' => self::index()->name,
            'surname' => self::index()->surname,
            'email' => self::index()->email,
            'image' => self::index()->image,
            'date' => self::index()->created_at->diffForHumans(),
        ]);
    }

    public function profile()
    {
        return view('profile.customer-profile', [
            'name' => self::index()->name,
            'surname' => self::index()->surname,
            'email' => self::index()->email,
            'image' => self::index()->image,
            'date' => self::index()->created_at->diffForHumans(),
        ]);
    }

    public function update(Request $request) {
        return $request->all();
    }
}
