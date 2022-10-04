<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use Livewire\Component;

class CustomerMarket extends Component
{
    public $search = '';
    public $category = '';

    public function render()
    {

        return view('livewire.customer-market', [
            'items' => Item::where('name', 'like', '%' . $this->search . '%')->get(),
            'categories' => Category::where('name', 'like', '%' . $this->category . '%')->get(),
            'categoryList' => Category::all(),
        ]);
    }
}
