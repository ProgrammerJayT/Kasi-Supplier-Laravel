<?php

namespace App\Http\Controllers;

use App\Models\BankingDetails;
use Illuminate\Http\Request;

class BankingControl extends Controller
{
    //
    public static function show($id) {
        $bankingInfo = BankingDetails::where('user_account_id', $id)->first();

        return $bankingInfo;
    }
}
