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

    //Login
    public function validateUser(Request $request)
    {
        //Validation
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        dd([
            $request->email,
            $request->password,
            
        ]);

        //Remove DieDump first
        //return redirect('');
        
    }


    public function addUser(Request $request)
    {
        $this->validate($request,[

            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'address' => 'required',
            'userType' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            
        ]);

        
        dd([
            $request->name,
            $request->surname,
            $request->username,
            $request->address,
            $request->email,
            $request->userType,
            $request->password,
            $request->password_confirmation,
            
        ]);  
        
        //Remove DieDump first
        //return redirect('');
    }

}
