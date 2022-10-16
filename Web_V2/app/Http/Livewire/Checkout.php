<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Http\Controllers\ShoppingItems;

class Checkout extends Component
{

    public $user,
        $userInfo,
        $cart,
        $total,
        $items,
        $deliveryChoice,
        $cardNumber,
        $cardExpiry,
        $cardCvv,
        $deliveryAddress,
        $deliveryNote,
        $latitude,
        $longitude;

    public function mount(Request $request)
    {

        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $this->user = $accountType;
        $this->userInfo = User::show($this->user, $myID);

        $this->cart = session()->has('cartItems') ? session()->get('cartItems') : array();
        $this->total = $request->total;
        $this->items = ShoppingItems::index()->original;
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
