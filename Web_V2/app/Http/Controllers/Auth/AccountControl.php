<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;

class AccountControl extends Controller
{
    //
    public static function create($name, $surname, $email, $password, $type)
    {

        //Create the user's account
        $account = new Account;
        $account->type = $type;
        $account->email = strtolower($email);
        $account->password = Hash::make($password);

        //Create the user's profile
        if ($type == 'admin') {
            $model = new Admin;
        } else {
            $type == 'vendor' ? $model = new Vendor : $model = new Customer;
        }

        $model->name = ucfirst(strtolower($name));
        $model->surname = ucfirst(strtolower($surname));
        $model->email = strtolower($email);

        $account->save() && $model->save() ?
            [$id = $model::where('email', strtolower($email))->first()->id, $status = true]
            : [$id = null, $status = false];

        return ([
            $id, $status
        ]);
    }

    public static function read($email, $password)
    {

        $account = Account::where('email', $email)->first();

        if ($account) {
            if (Hash::check($password, $account->password)) {
                $message = 'Successfully logged in';
                $status = 1;

                if ($account->type == 'admin') {
                    $id = Admin::where('email', $email)->first()->id;
                } else {
                    $account->type == 'vendor' ? $id = Vendor::where('email', $email)->first()->id
                        : $id = Customer::where('email', $email)->first()->id;
                }

                $type = $account->type;

            } else {
                $message = 'Incorrect password';
                $status = 0;
                $id = null;
                $type = null;
            }
        } else {
            $message = 'Your email address is not recognized';
            $status = 0;
            $id = null;
            $type = null;
        }

        return ([
            $status, $message, $id, $type
        ]);
    }
}
