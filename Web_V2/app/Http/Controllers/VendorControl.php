<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorControl extends Controller
{
    //

    public function index()
    {
        $vendors = Vendor::where('id', session()->get('user'))->first();

        return $vendors;
    }

    public function dashboard()
    {
        return view('dashboard.vendor-dashboard', [
            'name' => self::index()->name,
            'surname' => self::index()->surname,
            'email' => self::index()->email,
            'image' => self::index()->image,
            'date' => self::index()->created_at->diffForHumans(),
            'items' => Item::where('ven_id', session()->get('user'))->count(),
        ]);
    }

    public function profile()
    {
        return view('profile.vendor-profile', [
            'name' => self::index()->name,
            'surname' => self::index()->surname,
            'email' => self::index()->email,
            'image' => self::index()->image,
            'date' => self::index()->created_at->diffForHumans(),
        ]);
    }
}
