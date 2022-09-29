<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;

class AdminControl extends Controller
{
    //
    public function createUser(Request $req) {
        
        $req->validate([
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        if ($req->type == 'administrator') {
            $model = new Admin;
            $active = true;
            $role = 'admin';
        } else {
            $req->input('type') == 'customer' ? [$model = new Customer, $role = $req->input('type')]
                : [$model = new Vendor, $role = $req->input('type')];
            $active = false;
        }

        //Store user's details
        $model->name = ucfirst(strtolower($req->input('name')));
        $model->surname = ucfirst(strtolower($req->input('surname')));
        $model->email = strtolower($req->input('email'));

        //Create user's account
        $account = new Account;
        $account->email = strtolower($req->input('email'));
        $account->password = Hash::make($req->input('password'));
        $account->type = $role;
        $account->active = $active;

        if ($model->save() && $account->save()) {
            return back()->with('success', ucfirst($req->type).' account created successfully');
        } else {
            return back()->with('fail', 'Your account could not be created');
        }

    }
}
