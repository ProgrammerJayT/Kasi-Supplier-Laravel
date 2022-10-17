<?php

namespace App\Http\Controllers;

use App\Models\BankAccountType;
use Illuminate\Http\Request;

class BankAccountTypesControl extends Controller
{
    //
    public static function show($value)
    {

        $bankAccountType = BankAccountType::where('value', $value)->first();

        $bankAccountType == null || !$bankAccountType->exists ? $response = [
            'status' => 404,
            'message' => 'Bank account type not found',
            'id' => null,

        ] :  $response = [
            'status' => 200,
            'message' => $bankAccountType->name . ' account type was identified',
            'id' => $bankAccountType->id,
        ];

        return $response;
    }
}
