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
            'emal' => 'required',
            'password' => 'required',
        ]);

        dd([
            $request->emal,
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
            'emal' => 'required',
            'address' => 'required',
            'userType' => 'required',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
            
        ]);

        
        dd([
            $request->name,
            $request->surname,
            $request->username,
            $request->address,
            $request->emal,
            $request->userType,
            $request->password,
            $request->password_confirmation,
            
        ]);  
        
        //Remove DieDump first
        //return redirect('');
    }

}
