<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;

class BanksControl extends Controller
{
    //
    public static function show($value)
    {

        //Get value from HTML select input
        $bankDetails = Bank::where('value', $value)->first();

        //Check if record exists, if not return id null
        $bankDetails == null || !$bankDetails->exists ? $response = [
            'status' => 404,
            'message' => 'Bank not found',
            'id' => null
        ] : $response = [
            'status' => 200,
            'message' => $bankDetails->name . ' was identified',
            'id' => $bankDetails->id
        ];

        return $response;
    }
}
