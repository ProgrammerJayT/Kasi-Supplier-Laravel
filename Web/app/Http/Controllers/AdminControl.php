<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControl extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard.admin-dashboard');
    }

    public function profile() {
        return view('profile.admin-profile');
    }
}
