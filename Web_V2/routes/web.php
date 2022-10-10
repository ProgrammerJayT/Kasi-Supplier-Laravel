<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\Auth\LoginControl;
use App\Http\Controllers\Auth\RegistrationControl;
use App\Http\Controllers\CartControl;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\MarketControl;
use App\Http\Controllers\ProfileControl;
use App\Http\Controllers\ShoppingControl;
use App\Http\Controllers\VendorControl;
use App\Http\Controllers\WishlistControl;
use App\Http\Livewire\Shopping;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

// Authentication
// Login
Route::get('/login', [
    LoginControl::class, 'login'
]);

Route::post('/login-request', [
    LoginControl::class, 'loginRequest'
])->name('login-request');

// Registration
Route::get('/register', [
    RegistrationControl::class, 'register'
]);

Route::post('/register-request', [
    RegistrationControl::class, 'registerRequest'
])->name('register-request');



//User dashboards
Route::get('/admin-dashboard', [
    AdminControl::class, 'dashboard'
]);

Route::get('/vendor-dashboard', [
    VendorControl::class, 'dashboard'
]);

Route::get('/customer-dashboard', [
    CustomerControl::class, 'dashboard'
]);



//User profiles
Route::get('/admin-profile', [
    AdminControl::class, 'profile'
]);

Route::get('/vendor-profile', [
    VendorControl::class, 'profile'
]);

Route::get('/customer-profile', [
    CustomerControl::class, 'profile'
]);



//Update profile picture
Route::post('/update-profile-picture', [
    ProfileControl::class, 'updateProfilePicture'
])->name('update-profile-picture');



//Remove profile picture
Route::get('/remove-profile-picture', [
    ProfileControl::class, 'removeProfilePicture'
])->name('remove-profile-picture');



//Market
Route::get('/vendor-items', [
    MarketControl::class, 'vendorItems'
])->name('vendor-items');

Route::post('/add-item', [
    MarketControl::class, 'addItem'
])->name('add-item');



//Wishlist
Route::get('/vendor-wishlist', [
    WishlistControl::class, 'show'
])->name('vendor-wishlist');

Route::get('/customer-wishlist', [
    WishlistControl::class, 'show'
])->name('customer-wishlist');


//Shopping
Route::get('/shopping', [
    ShoppingControl::class, 'show'
    //Shopping::class, 'render'
])->name('shopping');



//Cart
Route::get('/add-to-cart', [
    CartControl::class, 'add'
])->name('add-to-cart');

Route::get('/view-cart', [
    CartControl::class, 'show'
])->name('view-cart');
