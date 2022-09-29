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
            'email' => 'required|email|unique:account',
            'type' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);


        $req->input('type') == 'customer' ? [$model = new Customer, $role = $req->input('type')]
            : [$model = new Vendor, $role = $req->input('type')];
        $active = false;

        // if ($req->type == null) {
        //     $model = new Admin;
        //     $active = true;
        //     $role = 'admin';
        // }

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
            return redirect($role . '-dashboard');
        } else {
            return back()->with('fail', 'Your account could not be created');
        }
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = Account::where('email', $req->input('email'))->first();
        if ($user) {
            if (Hash::check($req->input('password'), $user->password)) {
                $req->session()->put('user', $user->id);
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
        if (session()->has('user')) {
            session()->pull('user');

            return redirect('/');
        }
    }
}
