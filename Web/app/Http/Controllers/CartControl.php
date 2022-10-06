<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartControl extends Controller
{
    //
    public function customerCart() {
        return 'customer cart';
    }

    public function vendorCart() {
        return 'vendor cart';
    }

    public function add(Request $req) {
                
    }

    public function delete(Request $req) {

    }
}
