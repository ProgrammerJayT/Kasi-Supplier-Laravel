<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\Auth\AccountControl;
use App\Http\Controllers\Auth\LoginControl;
use App\Http\Controllers\Auth\RegistrationControl;
use App\Http\Controllers\AuthControl;
use App\Http\Controllers\CartCheckout;
use App\Http\Controllers\CartControl;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\DashboardControl;
use App\Http\Controllers\MarketControl;
use App\Http\Controllers\OrdersControl;
use App\Http\Controllers\ProfileControl;
use App\Http\Controllers\SalesControl;
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

Route::get('/logout', [
    AccountControl::class, 'logout'
])->name('/logout');



//User dashboards
Route::get('/admin-dashboard', [
    AdminControl::class, 'dashboard'
]);

Route::get('/dashboard', [
    DashboardControl::class, 'show'
])->name('dashboard');


//User profiles
Route::get('/admin-profile', [
    AdminControl::class, 'profile'
]);

Route::get('/profile', [
    ProfileControl::class, 'show'
])->name('profile');


//Update profile picture
Route::post('/update-profile-picture', [
    ProfileControl::class, 'updateProfilePicture'
])->name('update-profile-picture');



//Remove profile picture
Route::get('/remove-profile-picture', [
    ProfileControl::class, 'removeProfilePicture'
])->name('remove-profile-picture');



//Market
Route::get('/items', [
    MarketControl::class, 'show'
])->name('items');

Route::post('/add-item', [
    MarketControl::class, 'addItem'
])->name('add-item');

Route::get('/edit-item', [
    ShoppingControl::class, 'editItem'
])->name('edit-item');

Route::post('/update-item', [
    MarketControl::class, 'updateItem'
])->name('update-item');



//Wishlist
Route::get('/wishlist', [
    WishlistControl::class, 'show'
])->name('wishlist');


//Shopping
Route::get('/shopping', [
    ShoppingControl::class, 'show'
])->name('shopping');



//Cart
Route::get('/add-to-cart', [
    CartControl::class, 'add'
])->name('add-to-cart');

Route::get('/view-cart', [
    CartControl::class, 'show'
])->name('view-cart');



//Checkout
Route::get('/checkout', [
    CartCheckout::class, 'show'
])->name('checkout');

Route::post('/checkout-request', [
    CartCheckout::class, 'checkout'
])->name('checkout-request');

Route::get('orders', [
    OrdersControl::class, 'show'
])->name('orders');


Route::get('sales', [
    SalesControl::class, 'show'
])->name('sales');


Route::get('/success', [
    CartCheckout::class, 'success'
])->name('success');



//Banking details
Route::get('/remove-banking-details', [
    ProfileControl::class, 'removeBankingDetails'
])->name('remove-banking-details');

Route::post('/update-banking-details', [
    ProfileControl::class, 'updateBankingDetails'
])->name('update-banking-details');
