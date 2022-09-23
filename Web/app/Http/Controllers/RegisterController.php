<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class RegisterController extends Controller
{

    //Login
    public function user_login(Request $request)
    {
        //Validation
        $this->validate($request,[
            'emal' => 'required',
            'password' => 'required',
        ]);

        // dd([
        //     $request->emal,
        //     $request->password,

        // ]);



    }




    //Create User account
    public function create_user(Request $request)
    {


        $this->validate($request,[

            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'emal' => 'required',
            'address' => 'required',
            'userType' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',

        ]);

        //Store user

        // User::create([
        //     'Name' =>  $request->name,
        //     'Surname' =>  $request->surname,
        //     'Username' => $request->username,
        //     'Email' =>  $request->emal,
        //     'User_type' =>  $request->userType,
        //     'Address' =>  $request->address,
        //     'Password' => Hash::make($request->password),
        // ]);

        //Sign In



        // return redirect() -> route('Dashboard');
    }

}
