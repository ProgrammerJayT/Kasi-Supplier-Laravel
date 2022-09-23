<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Customer.market');
    }

    public function product()
    {
        return view('Customer.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {

    //    Validation
        $this->validate($request,[
        'product_name' => 'required',
        'product_description' => 'required | max:100',
        'product_price' => 'required | numeric',
        'product_image' => 'required',
        ]);


        //Store banking Details

        //Store based on loginId!!!!
        Vendor::create([
            'Bank_Name' => $request->bank_type,
            'Branch_Code'=> $request->branchCode,
            'Account_Number'=> $request->accountNumber,

            'Product_Name' => $request->product_name,
            'Product_Description' => $request->product_description,
            'Product_Price' => $request->product_price,
            'Product_Department' => $request->department_Type,
            'Product_Image' => $request->product_image,

            ]);

        //Remove DieDump first
        //return redirect('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
