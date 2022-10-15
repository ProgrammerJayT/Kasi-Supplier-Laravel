<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class MarketControl extends Controller
{
    //

    public function show()
    {
        $myID = session()->get('user')['id'];
        $accountType = session()->get('user')['type'];

        $user = User::show($accountType, $myID);

        return view('vendor-ops.view-items', [
            'items' => Item::where('ven_id', session()->get('user'))->get(),
            'categories' => Category::all()->sortBy('name'),
            'name' => $user->name,
            'image' => $user->image,
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

    public function editItem(Request $request)
    {
    }

    public function deleteItem(Request $request)
    {
        $item = Item::find($request->id);

        $item->delete() ? redirect(
            route('vendor-ops.view-items')
        )->with('item-delete-success', 'Item deleted successfully') : redirect(
            route('vendor.view-items')
        )->with('item-delete-failure', 'Item could not be deleted');
    }

    public function updateItem(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = Item::find($request->id);

        $item->cat_id = (int)substr($request->category, 0, 1);
        $item->desc = $request->description;
        $item->name = $request->name;
        $item->price = $request->price;

        if ($request->image) {
            $imageName = preg_replace('/\s+/', '', $request->name) . '.' . $request->image->extension();
            $request->image->move(public_path('images/vendor-stock/items/' . session()->get('user')), $imageName);

            $item->image = 'images/vendor-stock/items/' . session()->get('user') . '/' . $imageName;
        }

        $item->save() ? [
            $status = 'update-item-success',
            $message = 'Item updated successfully',
        ] : [
            $status = 'update-item-failure',
            $message = 'Item could not be updated',
        ];

        return redirect()->back()->with($status, $message);
    }
}
