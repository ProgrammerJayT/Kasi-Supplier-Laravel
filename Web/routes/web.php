<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\AuthControl;
use App\Http\Controllers\TestAPIs;
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
    return view('openingP');
});

Route::get('/login', function () {
    return view('auth.login');
}) -> name('Login');

Route::get('/register', function () {
    return view('auth.register');
}) -> name('Register');

Route::post('/registration-request', [
    AuthControl::class, 'register'
])->name('registration-request');

Route::post('/login-request', [
    AuthControl::class, 'login'
])->name('login-request');

Route::post('/logout-request', [
    AuthControl::class, 'logout'
])->name('logout-request');

Route::get('/admin-dashboard', function () {
    return view('dashboard.admin');
})->name('admin-dashboard');

Route::get('/vendor-dashboard', function () {
    return view('dashboard.vendor');
})->name('vendor-dashboard');

Route::get('/customer-dashboard', function () {
    return view('dashboard.customer');
})->name('customer-dashboard');



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

Route::get('/testAPI', [
    TestAPIs::class, 'test'
]);


//Product View
// Route::get('/market/product/{id}',function ($id){

//     $product = Item::where('id','=',$id)->first();

// return view('productView',['prod_data'=>$product]);
// });



