<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ProfileControl extends Controller
{
    //
    public function customerProfile() {

        $user = Customer::find(session()->get('user'));
        
        return view('customer-ops.view-profile', [
            'user' => $user
        ]);
    }

    public function vendorProfile() {
        return 'vendor profile';
    }
}
