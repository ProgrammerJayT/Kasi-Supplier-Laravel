<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\User;
use App\Http\Controllers\ShoppingItems;
use Illuminate\Http\Request;

class Cart extends Component
{
    public $totalPrice = array();
    public $quantity = 0;

    public function setQuantity($id)
    {
    }
    public function render(Request $request)
    {
        $items = ShoppingItems::index()->original;

        session()->has('cartItems') ? $cartItems = session()->get('cartItems') : $cartItems = array();

        return view('livewire.cart', [
            'items' => $items,
            'cartItems' => $cartItems,
            'user' => $request->user,
        ]);
    }
}
