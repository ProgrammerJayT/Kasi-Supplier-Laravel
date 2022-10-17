<?php

namespace App\Http\Controllers;

use App\Models\BankingCard;
use Illuminate\Http\Request;

class BankingCardsControl extends Controller
{
    //
    public function show($bankingDetailsID) {

        $bankingCard = BankingCard::where('banking_details_id', $bankingDetailsID)->first();

        return $bankingCard;
    }
}
