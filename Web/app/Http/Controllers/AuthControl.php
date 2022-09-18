<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControl extends Controller
{
    //

    public function register() {

    }

    public function registrationRequest(Request $req) {

        $req->validate([
            'name' => 'required',
            'email' => 'unique:account'
        ]);
    }

    public function login() {

    }

    public function logout() {
        
    }
}
