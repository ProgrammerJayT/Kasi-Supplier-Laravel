<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/registration-request', [
    AuthControl::class, 'register'
])->name('registrationRequest');

Route::post('/login-request', [
    AuthControl::class, 'login'
])->name('loginRequest');