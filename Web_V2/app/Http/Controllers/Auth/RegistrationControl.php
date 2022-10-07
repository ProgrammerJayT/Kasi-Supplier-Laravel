<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationControl extends Controller
{
    //
    public function register() {
        return view('auth-ops.register');
    }
    
    public function registerRequest(Request $request) {
        return $request->all();
    }
}
