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

        $attempt = AccountControl::create(
            $request->name,
            $request->surname,
            $request->email,
            $request->password,
            $request->type
        );

        if ($attempt[1] == true) {

            $user = array(
                'id' => $attempt[2],
                'type' => $attempt[3]
            );

            session()->put('user', $user);
            return redirect('/dashboard');
        } else {
            return back()->with('fail', 'Failed to create your account');
        }
    }
}
