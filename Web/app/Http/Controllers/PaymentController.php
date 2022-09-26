<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DB_Data = array();

        if(session()->has('LoginID')) //LoginID generated from login attempt
        {
            $DB_Data = User::where('User_ID','=',Session()->get('LoginID'))->first();
        }


        return view('Customer.confirmPayment',compact('Payment_Data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        // Validation

        $this->validate($request,[
            'payment_Proof' => 'required',
        ]);

        dd([
            $request->payment_Proof,
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
        $this->validate($request,[
            'branchCode' => 'required',
            'accountNumber' => 'required',
        ]);

        //Store banking Details

        //Store based on loginId!!!!
        Vendor::create([
        'Bank_Name' => $request->bank_type,
        'Branch_Code'=> $request->branchCode,
        'Account_Number'=> $request->accountNumber,
        ]);

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
