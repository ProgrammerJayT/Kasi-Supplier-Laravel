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
        $addressEnabled,
        $latitude,
        $longitude;

    protected $rules = [
        'cardNumber' => 'required|numeric',
        'cardExpiry' => 'required',
        'cardCvv' => 'required|numeric',
        'deliveryAddress' => 'required_if:deliveryChoice,==,true'

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(Request $request)
    {
        $validatedData = $this->validate();

        dd($this->latitude . ' ' . $this->longitude);
    }

    public function mount(Request $request)
    {
        $this->user = $request->user;
        $this->userInfo = User::show($this->user, session()->get('user'));
        $this->cart = session()->has('cartItems') ? session()->get('cartItems') : array();
        $this->total = $request->total;
        $this->items = ShoppingItems::index()->original;

        $this->deliveryChoice ? $this->addressEnabled = 'disabled' : '';
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
