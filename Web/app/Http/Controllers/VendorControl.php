<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorControl extends Controller
{
    //
    public function addProduct() {
        return view('vendor-ops.add-product');
    }

    public function addProductRequest(Request $req) {
        
    }
}
