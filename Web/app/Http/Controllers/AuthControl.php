<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControl extends Controller
{
    //
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        return $req->input();
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'
        ]);

        return $req->input();
    }

    public function logout()
    {
    }
}
