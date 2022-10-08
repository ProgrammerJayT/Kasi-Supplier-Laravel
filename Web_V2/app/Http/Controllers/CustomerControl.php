<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerControl extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard.customer-dashboard');
    }

    public function profile() {
        
    }
}
