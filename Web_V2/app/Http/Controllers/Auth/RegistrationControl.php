<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationControl extends Controller
{
    //
    public function register()
    {
        return view('auth-ops.register');
    }

    public function registerRequest(Request $request)
    {

        $request->validate([
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'type' => 'required',
            'email' => 'required|email|unique:account',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        $id = AccountControl::create(
            $request->name,
            $request->surname,
            $request->email,
            $request->password,
            $request->type
        );

        if ($id[1] == true) {

            session()->put('user', $id[0]);
            return redirect('/' . $request->type . '-dashboard');
        } else {
            return back()->with('fail', 'Failed to create your account');
        }
    }
}
