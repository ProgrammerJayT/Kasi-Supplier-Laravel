<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
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

        return view('Customer.dashboard',compact('UserData'));
    }

    public function cart()
    {
        return view('Customer.cart');
    }

    public function profile()
    {
        return view('Customer.profile');
    }

    public function report()
    {

    }

    public function wishlist()
    {
        return view('Customer.wishlist');
    }

    public function bankDetails()
    {
        return view('Customer.bankingDetails');
    }

    public function Logout_user()
    {
        if(Session()->has('LoginID'))
        {
            Session()->pull('LoginID');
            return redirect(route('Login'))->with('Logout_Success','Signed Out Successfully');
        }
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Customer.createProduct');
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
