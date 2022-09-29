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

// Route::post('/create-customer', [
//     AdminControl::class, 'createUser'
// ])->name('create-customer');

// Route::post('/create-vendor', [
//     AdminControl::class, 'createUser'
// ])->name('create-vendor');

// Route::post('/create-administrator', [
//     AdminControl::class, 'createUser'
// ])->name('create-administrator');

Route::get('/testAPI', [
    TestAPIs::class, 'test'
]);
