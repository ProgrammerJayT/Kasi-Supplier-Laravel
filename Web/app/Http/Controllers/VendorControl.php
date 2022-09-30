<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorControl extends Controller
{
    //
<<<<<<< Updated upstream
=======


    public function addProduct()
    {
        $category = Category::all();

        return view('vendor-ops.create-product', [
            'categories' => $category
        ]);
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
            'product_name' => 'required', //Sorted
            'product_description' => 'required | max:100', //Sorted
            'product_price' => 'required | numeric',
            'product_image' => 'required',
            'department_Type' => 'required'
        ]);


        $item = new Item;
        $category = new Category;

        $getItem = $category::where('value', $req->department_Type)->first();

        //cat_id	desc	name	price

        $item->cat_id = $getItem->id;
        $item->price = $req->product_price;
        $item->desc = $req->product_description;
        $item->name = ucfirst(strtolower($req->product_name));
        $item->ven_id = session()->get('user');

        $item->save() ? [
            $type = 'success',
            $message = 'Product added successfully',
        ] : [
            $type = 'fail',
            $message = 'Could not create product',
        ];

        return back()->with($type, $message);
    }
>>>>>>> Stashed changes
}
