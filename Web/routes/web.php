<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\AuthControl;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\MarketControl;
use App\Http\Controllers\TestAPIs;
use App\Http\Controllers\VendorControl;
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

Route::get('/', function () {
    return view('auth.login');
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

Route::get('/admin-dashboard', function () {
    return view('dashboard.admin');
})->name('admin-dashboard');

Route::get('/vendor-dashboard', function () {
    $item = Item::all();
    $category = Category::all();

    return view('dashboard.vendor', [
        'items' => $item, 'categories' => $category
    ]);
})->name('vendor-dashboard');

Route::get('/customer-dashboard', [
    CustomerControl::class, 'dashboard'
])->name('customer-dashboard');

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

Route::get('/logout', function () {
    return redirect('/');
})->name('logout');

Route::get('/create-product', [
    VendorControl::class, 'addProduct'
])->name('create-product');

Route::post('/create-product-request', [
    VendorControl::class, 'addProductRequest'
])->name('create-product-request');

Route::get('view-market', [
    MarketControl::class, 'customerMarket'
])->name('view-market');

Route::get('/testAPI', [
    TestAPIs::class, 'test'
]);
