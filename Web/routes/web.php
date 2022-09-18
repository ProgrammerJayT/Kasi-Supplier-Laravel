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

Route::get('/login', [
    AuthControl::class, 'login'
])->name('login');

Route::get('/register', [
    AuthControl::class, 'register'
])->name('register');

Route::post('/registrationRequest', [
    AuthControl::class, 'registrationRequest'
])->name('registrationRequest');

Route::post('/loginRequest', [
    AuthControl::class, 'loginRequest'
])->name('loginRequest');