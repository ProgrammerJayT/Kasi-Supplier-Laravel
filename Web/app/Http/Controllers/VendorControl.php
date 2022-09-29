<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Item;
use Illuminate\Support\Facades\Session;

class VendorControl extends Controller
{
    //
    public function addProduct()
    {
        return view('vendor-ops.create-product');
    }

    public function addProductRequest(Request $req)
    {
        // $this->validate($req, [
        //     'product_name' => 'required',
        //     'product_description' => 'required | max:100',
        //     'product_price' => 'required | numeric',
        //     'product_image' => 'required',
        //     'department_Type' => 'required'
        // ]);

        $req->validate([
            'product_name' => 'required',
            'product_description' => 'required | max:100',
            'product_price' => 'required | numeric',
            'product_image' => 'required',
            'department_Type' => 'required'
        ]);

        $vendor = new Vendor;
        $item = new Item;
        $category = new Category;
        
        

    }
}
