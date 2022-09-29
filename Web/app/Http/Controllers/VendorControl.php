<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $supportedExtension = array('jpg', 'jpeg', 'png');

        $imageExtension = explode('/', $_FILES['image']['type']);
        $imageExtension = $imageExtension[1];

        $path = $_FILES['image']['tmp_name'];

        if (!in_array($imageExtension, $supportedExtension)) {
            echo '<script>alert("File type not supported");</script>';
        } else {
            // if (!file_exists('items')) {
            //     mkdir('removed-bg', 0777, true);
            // }
            // $fp = fopen("removed-bg/removed-bg.png", "wb");
            // fwrite($fp, $res->getBody());
            // fclose($fp);
        }
    }
}
