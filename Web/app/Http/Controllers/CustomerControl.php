<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Account;

class CustomerControl extends Controller
{
    public function index()
    {
        $User_Data=array();

        if(session()->has('user'))
        {
            $User_Data=Account::where('User_ID','=',session()->get('user'))->first();
        }


        return view($User_Data->type . '-dashboard',compact('User_Data'));

    }
}
