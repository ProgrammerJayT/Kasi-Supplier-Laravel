<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class MarketControl extends Controller
{
    //

    public function vendorItems()
    {
        return view('vendor-ops.view-items', [
            'items' => Item::where('ven_id', session()->get('user'))->get(),
            'categories' => Category::all()->sortBy('name'),
        ]);
    }

    public function addItem(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if (Item::where('name', $request->name)->exists()) {
            return back()->with('item-add-fail', 'Item already exists.');
        }


        $item = new Item();

        $item->cat_id = substr($request->category, 0, 1);
        $item->ven_id = session()->get('user');
        $item->desc = $request->description;
        $item->name = $request->name;
        $item->price = $request->price;

        $imageName = preg_replace('/\s+/', '', $request->name) . '.' . $request->image->extension();
        $request->image->move(public_path('images/vendor-stock/items/' . session()->get('user')), $imageName);

        $item->image = 'images/vendor-stock/items/' . session()->get('user') . '/' . $imageName;


        $item->save() ? [
            $status = 'add-item-success',
            $message = 'Item added successfully',
        ] : [
            $status = 'add-item-failure',
            $message = 'Item could not be added',
        ];

        return redirect()->back()->with($status, $message);
    }
}
