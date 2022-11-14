<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\User;
use App\Models\Item;
use App\Models\Wishlist as ModelsWishlist;
use Livewire\Component;

class Wishlist extends Component
{
    public $user, $account, $items;

    public function removeItem($id)
    {
        try {
            ModelsWishlist::destroy($id) ? session()->flash('item-remove-success', 'Item removed successfully') :
                session()->flash('item-remove-fail', 'Failed to delete');
        } catch (\Throwable $th) {
            session()->flash('item-remove', $th->getMessage());
        }
    }

    public function mount()
    {

        $this->user = User::show(session()->get('user')['type'], session()->get('user')['id']);
        $this->account = AccountControl::show($this->user->email);
        $this->items = Item::all();
    }

    public function render()
    {

        return view('livewire.wishlist', [
            'wishlist' => ModelsWishlist::where('account_id', $this->account->id)->get(),
        ]);
    }
}
