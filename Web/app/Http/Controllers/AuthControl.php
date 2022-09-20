<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControl extends Controller
{
    //

    public function register(Request $req) {
        return "Registration Page";
    }

    public function login(Request $req) {
        return "Login Page";
    }

    public function logout() {
        
    }
}
