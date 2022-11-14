<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\BankingCardsControl;
use App\Http\Controllers\BankingDetailsControl;
use App\Http\Controllers\BanksControl;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Http\Controllers\ShoppingItems;
use App\Http\Controllers\Stripe\BankCardControl;
use App\Models\Bank;
use App\Models\BankAccountType;
use App\Models\BankCard;

class Checkout extends Component
{
    public $user,
        $userInfo,
        $cart,
        $items,
        $deliveryChoice,
        $cardNumber,
        $cardExpiry,
        $cardCvc,
        $deliveryAddress,
        $deliveryNote,
        $latitude,
        $longitude,
        $bankingInformation,
        $hasBankDetails,
        $alternativePayment;

    public function mount(Request $request)
    {

        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];
        $userInfo = User::show($accountType, $myID);
        $accountInfo = AccountControl::show($userInfo->email);

        $this->bankingInformation = BankingDetailsControl::show($accountInfo->id);

        $this->user = $accountType;
        $this->userInfo = User::show($this->user, $myID);

        $this->cart = session()->has('cartItems') ? session()->get('cartItems') : array();
        $this->items = ShoppingItems::index()->original;
        $this->bankingInformation['status'] == 404 ? $this->hasBankDetails = false : $this->hasBankDetails = true;
    }

    public function render()
    {
        $this->hasBankDetails ? [
            $bank = Bank::find($this->bankingInformation['bank_id']),
            $bankCard = BankingCardsControl::show($this->bankingInformation['id']),
            $bankAccountType = BankAccountType::find($this->bankingInformation['bank_account_type_id']),
        ] : [
            $bank = null,
            $bankCard = null,
            $bankAccountType = null,
        ];

        return view('livewire.checkout', [
            'total' => session()->get('new-order')['total'],
            'id' => session()->get('new-order')['id'],
            'bankingInformation' => $this->bankingInformation,
            'bankCard' => $bankCard,
            'bank' => $bank,
            'bankAccountType' => $bankAccountType,
        ]);
    }
}
