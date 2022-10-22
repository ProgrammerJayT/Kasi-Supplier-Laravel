<?php

namespace App\Http\Controllers;

use App\Models\BankCard;
use Illuminate\Http\Request;

class BankingCardsControl extends Controller
{
    //
    public static function show($bankingDetailsID) {

        $bankingCard = BankCard::where('banking_details_id', $bankingDetailsID)->first();

        return $bankingCard;
    }
}
