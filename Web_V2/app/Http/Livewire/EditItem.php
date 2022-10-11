<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class EditItem extends Component
{
    use WithFileUploads;

    public $itemId, $itemName, $item, $itemPrice, $itemDescription, $itemCategory;

    protected $rules = [
        'itemName' => 'required',
        'itemPrice' => 'required',
        'itemDescription' => 'required',
        'itemCategory' => 'required',
    ];

    public function mount(Request $request)
    {
        $this->itemId = $request->id;
        $this->item = Item::find($this->itemId);
        $this->itemName = $this->item->name;
        $this->itemPrice = $this->item->price;
        $this->itemDescription = $this->item->desc;
        $this->itemCategory = $this->item->cat_id;
    }

    public function deleteItem($id) {
        $item = Item::find($id);
        $item->delete();
        return redirect()->route('vendor-items', [
            'user' => 'vendor',
        ])->with('delete-item-success', 'Item deleted successfully');
    }

    public function render(Request $request)
    {
        return view('livewire.edit-item', [
            'item' => $this->item,
            'categories' => Category::all()->sortBy('name'),

        ]);
    }
}
