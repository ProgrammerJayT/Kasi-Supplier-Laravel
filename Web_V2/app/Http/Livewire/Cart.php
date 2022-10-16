<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\User;
use App\Http\Controllers\ShoppingItems;
use Illuminate\Http\Request;

class Cart extends Component
{
    public $totalPrice = 0, $quantity = array(), $cartItems, $enterQty, $user;

    public function removeItem($id)
    {
        $newCart = array_diff($this->cartItems, [$id]);
        session()->put('cartItems', array_values($newCart));
        $this->cartItems = session()->get('cartItems');

        //Set session message
        session()->flash('item-remove', 'Item removed from cart');
    }

    public function clear()
    {
        $this->cartItems = array();
        $this->totalPrice = 0;
        $this->quantity = array();
        $this->enterQty = null;

        session()->pull('cartItems');
        session()->pull('itemQuantity');
    }

    public function mount()
    {
        session()->has('cartItems') ? $this->cartItems = session()->get('cartItems') : $this->cartItems = array();

        for ($i = 0; $i < count($this->cartItems); $i++) {
            $this->quantity[$this->cartItems[$i]] = 1;
        }
    }

    public function render()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $this->user = User::show($accountType, $myID);
        $items = ShoppingItems::index()->original;

        //Get sum of all items in cart
        $this->totalPrice = 0;

        foreach ($items as $item) {
            if (in_array($item->id, $this->cartItems) && count($this->cartItems) > 0) {
                if ($this->quantity[$item->id] == '' || $this->quantity[$item->id] <= 0) {
                    $this->quantity[$item->id] = 1;
                }
                $this->totalPrice += (int)$item->price * (int)$this->quantity[$item->id];
            }
        }

        return view('livewire.cart', [
            'items' => $items,
            'cartItems' => $this->cartItems,
            'user' => $this->user,
            'quantity' => (int)$this->quantity,
            'totalPrice' => $this->totalPrice,

        ]);
    }
}
