<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\Auth\LoginControl;
use App\Http\Controllers\Auth\RegistrationControl;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\VendorControl;
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
