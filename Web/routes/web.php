<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\AuthControl;
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
