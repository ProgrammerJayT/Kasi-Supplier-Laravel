<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ShoppingCategories;
use App\Http\Controllers\ShoppingItems;
use App\Http\Controllers\User;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Livewire\Component;

class Shopping extends Component
{
    public $search = '';
    public $cartItems = array();
    public $prevCartItems = array();
    public $results = array();

    public $user;

    public function addToCart($id)
    {
        //dd($this->user);

        if (session()->has('cartItems') && in_array($id, session()->get('cartItems'))) {
            $this->results['type'] = 'danger';
            $this->results['message'] = 'You already have this item added in your cart';
        } else {
            $this->cartItems[] = $id;
            session()->put('cartItems', $this->cartItems);

            $this->results['type'] = 'success';
            $this->results['message'] = 'Item added to cart successfully';
        }
    }

    public function clearCart()
    {
        if (count($this->cartItems) > 0) {

            $this->results['type'] = 'success';
            $this->results['message'] = 'Cart cleared successfully';
        } else {

            $this->results['type'] = 'danger';
            $this->results['message'] = 'No items to clear';
        }

        session()->pull('cartItems');
        $this->cartItems = array();
    }

    public function mount(Request $request){
        $this->user = $request->user;
    }

    public function render(Request $request)
    {
        $categories = ShoppingCategories::index()->original;
        

        return view('livewire.shopping', [
            'items' => Item::where('name', 'like', '%' . $this->search . '%')
                ->where('ven_id', '!=', session()->get('user'))->get(),
            'categories' => $categories,
            'user' => $this->user,
            'cartItems' => $this->cartItems,
            'results' => $this->results,
        ]);
    }
}
