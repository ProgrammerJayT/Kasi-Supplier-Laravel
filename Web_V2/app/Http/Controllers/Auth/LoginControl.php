<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControl extends Controller
{
    //
    public function login() {
        return view('auth-ops.login');
    }

    public function loginRequest(Request $request) {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
    }
}
