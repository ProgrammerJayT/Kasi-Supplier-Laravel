<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Controllers\User;
use App\Models\BankCard;
use App\Models\BankingDetails;
use DateTime;

class BankingDetailsControl extends Controller
{
    //

    public static function create($data)
    {
        $myID = session()->get('user')['id'];
        $myAccountType = session()->get('user')['type'];

        $userInfo = User::show($myAccountType, $myID);

        $userAccount = Account::where('email', $userInfo->email)->first();

        $bankAccountTypes = BankAccountTypesControl::show($data['account_type']);
        $banks = BanksControl::show($data['bank']);

        $response = array();

        if ($bankAccountTypes['status'] == 200) {
            if ($banks['status'] == 200) {
                if (self::show($userAccount->id)['status'] == 404) {

                    $createNewBankingDetails = new BankingDetails();
                    $createNewBankingCard = new BankCard();

                    $createNewBankingDetails->bank_id = $banks['id'];
                    $createNewBankingDetails->bank_account_type_id = $bankAccountTypes['id'];
                    $createNewBankingDetails->user_account_id = $userAccount->id;
                    $createNewBankingDetails->account_number = $data['account_number'];

                    if ($createNewBankingDetails->save()) {

                        //Get the newly created banking details
                        $getNewBankingDetails = BankingDetailsControl::show($userAccount->id);

                        if ($getNewBankingDetails['status'] == 200) {
                            $createNewBankingCard->banking_details_id = $getNewBankingDetails['id'];
                            $createNewBankingCard->card_number = $data['card_number'];
                            $createNewBankingCard->cvv = $data['card_cvv'];
                            $createNewBankingCard->expiry_date = DateTime::createFromFormat('Y-m', $data['exp_year'] . '-' . $data['exp_month']);

                            if ($createNewBankingCard->save()) {
                                $response = [
                                    'status' => 201,
                                    'message' => 'Banking details created successfully',
                                ];
                            } else {
                                $response = [
                                    'status' => 500,
                                    'message' => 'Banking card creation failed',
                                ];
                            }
                        }
                    } else {
                        $response = [
                            'status' => 500,
                            'message' => 'Banking details could not be saved',
                        ];
                    }


                    //Update user baking details and card details if they exist
                } else {
                    self::update($data);
                }


                //Return error if bank is not found
            } else {
                $response = [
                    'status' => $banks['status'],
                    'message' => $banks['message'],
                    'id' => $banks['id'],
                ];
            }


            //Return error if bank account type is not found
        } else {
            $response = [
                'status' => $bankAccountTypes['status'],
                'message' => $bankAccountTypes['message'],
                'id' => $bankAccountTypes['id'],
            ];
        }

        return $response;
    }

    public static function show($userAccountId)
    {

        $bankingDetails = BankingDetails::where('user_account_id', $userAccountId)->first();

        $response = array();

        if ($bankingDetails == null || !$bankingDetails->exists) {
            $response = [
                'status' => 404,
                'message' => 'Banking details not found',
                'id' => null
            ];
        } else {
            $response = [
                'status' => 200,
                'message' => 'Banking details found',
                'id' => $bankingDetails->id
            ];
        }

        return $response;
    }

    public static function update($data)
    {
        dd('Updates?');
    }
}
