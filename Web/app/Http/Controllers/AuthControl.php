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

        if ($req->type == null) {
            $model = new Admin;
            $active = true;
            $role = 'admin';
        } else {
            $req->input('type') == 'customer' ? [$model = new Customer, $role = $req->input('type')]
                : [$model = new Vendor, $role = $req->input('type')];
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
        $account->type = $role;
        $account->active = $active;

        if ($model->save() && $account->save()) {
            return redirect($role . '-dashboard');
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

        $user = Account::where('email', $req->input('email'))->first();
        if ($user) {
            if (Hash::check($req->input('password'), $user->password)) {
                return redirect($user->type . '-dashboard');
            } else {
                return back()->with('fail', 'Incorrect credentials');
            }
        } else {
            return back()->with('fail', 'Incorrect credentials');
        }
    }

    public function logout()
    {
    }
}
