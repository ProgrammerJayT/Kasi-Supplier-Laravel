<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class MarketControl extends Controller
{
    //
    public function customerMarket() {

        $items = Item::all();
        $categories = Category::all();

        return view('customer-ops.view-markets', [
            'items' => $items,
            'categories' => $categories,
        ]);
    }
    
    public function vendorMarket() {

        $items = Item::all();
        return view('vendor-ops.view-markets', [
            'items' => $items
        ]);
    }
}
