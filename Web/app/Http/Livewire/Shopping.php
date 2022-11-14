<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\ShoppingCategories;
use App\Http\Controllers\ShoppingItems;
use App\Http\Controllers\User;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Vendor;
use App\Models\Wishlist;
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
            session()->has('cartItems') ? $this->cartItems = session()->get('cartItems') : $this->cartItems = array();
            $this->cartItems[] = $id;
            session()->put('cartItems', $this->cartItems);

            $this->results['type'] = 'success';
            $this->results['message'] = 'Item added to cart successfully';
        }
    }

    public function addToWishlist($id)
    {

        $myId = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myId);
        $account = AccountControl::show($user->email);

        $checkItem = Wishlist::where('item_id', $id)
            ->where('account_id', $account->id)->first();

        if ($checkItem == null) {
            $createWishlistItem = new Wishlist;

            $createWishlistItem->item_id = $id;
            $createWishlistItem->account_id = $account->id;

            $createWishlistItem->save() ? [
                $this->results['type'] = 'success',
                $this->results['message'] = 'Item successfully added to your wishlist'
            ] : [
                $this->results['type'] = 'danger',
                $this->results['message'] = 'Something went wrong'
            ];
        } else {
            $this->results['type'] = 'danger';
            $this->results['message'] = 'You already have this item in your wishlist';
        }
    }

    public function clearCart()
    {
        session()->has('cartItems') ? [
            $this->results['type'] = 'success',
            $this->results['message'] = 'Cart cleared successfully',
            session()->pull('cartItems'),
        ] : [
            $this->results['type'] = 'danger',
            $this->results['message'] = 'Cart is already empty'
        ];

        $this->cartItems = array();
    }

    public function mount()
    {
    }

    public function render()
    {
        $myId = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $categories = ShoppingCategories::index()->original;

        $accountType == 'vendor' ? [
            $items = Item::where('name', 'like', '%' . $this->search . '%')
                ->where('ven_id', '!=', session()->get('user'))->get()
        ] : [
            $items = Item::where('name', 'like', '%' . $this->search . '%')->get()
        ];

        return view('livewire.shopping', [
            'items' => $items,
            'categories' => $categories,
            'user' => $this->user,
            'cartItems' => $this->cartItems,
            'results' => $this->results,
        ]);
    }
}
