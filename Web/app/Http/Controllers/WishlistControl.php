<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistControl extends Controller
{
    //
    public function customerWishlist() {
        return 'customer wishlist';
    }

    public function vendorWishlist() {
        return 'vendor wishlist';
    }
}
