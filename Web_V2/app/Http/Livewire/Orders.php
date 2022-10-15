<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Orders extends Component
{
    public $cartItems = array();
    public $quantity = array();
    public $totalPrice = 0;

    public function render()
    {
        return view('livewire.orders');
    }
}
