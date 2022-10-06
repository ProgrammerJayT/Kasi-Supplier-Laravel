<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\AuthControl;
use App\Http\Controllers\CartControl;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\MarketControl;
use App\Http\Controllers\ProfileControl;
use App\Http\Controllers\TestAPIs;
use App\Http\Controllers\VendorControl;
use App\Http\Controllers\WishlistControl;
use App\Models\Category;
use App\Models\Item;
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


// Authentication routes
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/registration-request', [
    AuthControl::class, 'register'
])->name('registration-request');

Route::post('/login-request', [
    AuthControl::class, 'login'
])->name('login-request');

Route::get('/logout', [
    AuthControl::class, 'logout'
])->name('logout');





//Users dashboards
Route::get('/admin-dashboard', [
    AdminControl::class, 'dashboard'
])->name('admin-dashboard');

Route::get('/vendor-dashboard', [
    VendorControl::class, 'dashboard'
])->name('vendor-dashboard');

Route::get('/customer-dashboard', [
    CustomerControl::class, 'dashboard'
])->name('customer-dashboard');





//Administrator operations
Route::get('/create-administrator', function () {
    return view('admin-ops.create-administrator');
});

Route::get('/create-customer', function () {
    return view('admin-ops.create-customer');
});

Route::get('/create-vendor', function () {
    return view('admin-ops.create-vendor');
});

Route::post('/add-user-request', [
    AdminControl::class, 'createUser'
])->name('add-user');





//Vendor operations
Route::get('/create-product', [
    VendorControl::class, 'addProduct'
])->name('create-product');

Route::post('/create-product-request', [
    VendorControl::class, 'addProductRequest'
])->name('create-product-request');





//Market handlers
Route::get('customer-market', [
    MarketControl::class, 'customerMarket'
])->name('customer-market');

Route::get('vendor-market', [
    MarketControl::class, 'vendorMarket'
])->name('vendor-market');




//Cart handlers
Route::get('customer-cart', [
    CartControl::class, 'customerCart'
])->name('vendor-cart');

Route::get('vendor-cart', [
    CartControl::class, 'vendorCart'
])->name('vendor-cart');




//User profiles
Route::get('customer-profile', [
    ProfileControl::class, 'customerProfile'
])->name('customer-profile');

Route::get('vendor-profile', [
    ProfileControl::class, 'vendorProfile'
])->name('vendor-profile');




//Wishlist handlers
Route::get('customer-wishlist', [
    WishlistControl::class, 'customerWishlist'
])->name('customer-wishlist');

Route::get('vendor-wishlist', [
    WishlistControl::class, 'vendorWishlist'
])->name('vendor-wishlist');




//Test routes
Route::get('/testAPI', [
    TestAPIs::class, 'test'
]);
