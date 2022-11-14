<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControl extends Controller
{
    //
    public function login()
    {
        return view('auth-ops.login');
    }

    public function loginRequest(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $response = (AccountControl::read($request->email, $request->password));

        if ($response[0] == 0) {
            return redirect()->back()->with('fail', $response[1]);
        } else {
            $user = array(
                'id' => $response[2],
                'type' => $response[3]
            );

            session()->put('user', $user);
            return redirect('/dashboard');
        }
    }
}
