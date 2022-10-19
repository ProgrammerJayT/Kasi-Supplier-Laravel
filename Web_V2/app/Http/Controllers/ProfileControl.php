<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BankAccountType;
use App\Models\BankingDetails;
use App\Models\Vendor;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\Stripe\BankCardControl;
use App\Models\Bank;
use App\Models\BankCard;
use Stripe\StripeClient;

class ProfileControl extends Controller
{
    //

    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $userInfo = User::show($accountType, $myID);

        //Get user account information
        $accountInfo = AccountControl::show($userInfo->email);
        $bankingInfo = BankingControl::show($accountInfo->id);

        $bankingInfo != null ? [
            $bankCard = BankCard::where('banking_details_id', $bankingInfo->id)->first(),
            $bank = Bank::where('id', $bankingInfo->bank_id)->first(),
            $bankAccountType = BankAccountType::where('id', $bankingInfo->bank_account_type_id)->first(),
        ] : [
            $bankCard = null,
            $bank = Bank::all(),
            $bankAccountType = BankAccountType::all(),
        ];


        return view('profile', [
            'name' => $userInfo->name,
            'surname' => $userInfo->surname,
            'email' => $userInfo->email,
            'date' => $userInfo->created_at,
            'image' => $userInfo->image,
            'user' => $accountType,
            'bankingInfo' => $bankingInfo,
            'banks' => $bank,
            'bankAccountTypes' => $bankAccountType,
            'bankCards' => $bankCard,
        ]);
    }

    public function updateProfilePicture(Request $request)
    {
        $userID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $userInfo = User::show($accountType, $userID);

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $userInfo->email . '.' . $request->image->extension();
        $request->image->move(public_path('images/profile-pictures/' . $accountType), $imageName);

        switch ($accountType) {
            case 'customer':
                $model = new Customer;
                break;

            case 'vendor':
                $model = new Vendor;
                break;

            case 'admin':
                $model = new Admin;
                break;

            default:
                //
                break;
        }

        $model::where('email', $userInfo->email)->update([
            'image' => 'images/profile-pictures/' . $accountType . '/' . $imageName,
        ]);

        return back()
            ->with('image-update-success', 'You have successfully updated your profile picture.');
        //->with('image', $imageName);
    }

    public function removeProfilePicture(Request $request)
    {
        switch ($request->user) {
            case 'customer':
                $model = new Customer;
                break;

            case 'vendor':
                $model = new Vendor;
                break;

            case 'admin':
                $model = new Admin;
                break;

            default:
                //
                break;
        }

        if ($model::where('email', $request->email)->first()->image != 'images/profile-pictures/default/default.png') {
            $model::where('email', $request->email)->update([
                'image' => 'images/profile-pictures/default/default.png',
            ]);

            return back()
                ->with('image-update-success', 'You have successfully removed your profile picture.');
        } else {
            return back()
                ->with('image-update-success', 'You have no profile picture to remove.');
        }
    }

    public function updateBankingDetails(Request $request)
    {
        $request->validate([
            'bank' => 'required',
            'bank_account_type' => 'required',
            'bank_account_number' => 'required|numeric|digits:10',
            'bank_card_number' => 'required|numeric|digits:16',
            'bank_card_expiry' => 'required|date',
            'bank_card_cvv' => 'required|numeric|digits:3',
        ]);

        $bankCardData = [
            'card_number' => $request->bank_card_number,
            'exp_month' => explode('-', $request->bank_card_expiry)[1],
            'exp_year' => explode('-', $request->bank_card_expiry)[0],
            'card_cvv' => $request->bank_card_cvv,
        ];

        $bankingDetailsData = [
            'bank' => $request->bank,
            'account_type' => $request->bank_account_type,
            'account_number' => $request->bank_account_number,
            'card_number' => $request->bank_card_number,
            'exp_month' => explode('-', $request->bank_card_expiry)[1],
            'exp_year' => explode('-', $request->bank_card_expiry)[0],
            'card_cvv' => $request->bank_card_cvv,
        ];

        $createBankCard = BankCardControl::create($bankCardData);

        if ($createBankCard->getStatusCode() == 201) {
            $createBankingDetails = BankingDetailsControl::create($bankingDetailsData);

            $createBankingDetails['status'] == 201 ? [
                $attempt = 'banking-update-success',
                $message = 'You have successfully updated your banking details.'
            ] : [
                $attempt = 'banking-update-fail',
                $message = 'Something went wrong. Please try again.'
            ];

            return back()
                ->with($attempt, $message);
        } else {
            return back()
                ->with('banking-update-fail', $createBankCard->original['message']);
        }
    }

    public function removeBankingDetails()
    {
    }
}
