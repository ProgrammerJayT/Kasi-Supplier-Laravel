<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        return view('Main.welcome');
    }


    public function login()
    {
        return view('Main.login');
    }

    public function register()
    {
        return view('Main.register');
    }



}
