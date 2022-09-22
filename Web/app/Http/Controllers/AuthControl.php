<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Vendor;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthControl extends Controller
{
    //
    public function register(Request $req)
    {
        $req->validate([
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'location' => 'required',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        if ($req->type == '') {
            $model = new Admin;
            $active = true;
        } else {
            $req->input('type') == 'customer' ? $model = new Customer : $model = new Vendor;
            $active = false;
        }

        //Store user's details
        $model->name = $req->input('name');
        $model->surname = $req->input('surname');
        $model->email = $req->input('email');
        $model->location = $req->input('location');

        //Create user's account
        $account = new Account;
        $account->email = $req->input('email');
        $account->password = Hash::make($req->input('password'));
        $account->type = $req->input('type');
        $account->active = $active;

        if ($model->save() && $account->save()) {
            return redirect($req->input('type').'-dashboard');
        } else {
            return back()->with('fail', 'Your account could not be created');
        }
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
