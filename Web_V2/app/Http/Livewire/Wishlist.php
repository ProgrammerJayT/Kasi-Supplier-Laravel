<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wishlist extends Component
{
    public $wishlist;
    public function mount() {
        $this->wishlist = \App\Models\Wishlist::all();
    }

    public function render()
    {

        return view('livewire.wishlist');
    }
}
