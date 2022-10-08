<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorControl extends Controller
{
    //
    public function dashboard()
    {
        $user = Vendor::where('id', session()->get('user'))->first();
        return view('dashboard.vendor-dashboard', [
            'name' => $user->name
        ]);
    }
}
