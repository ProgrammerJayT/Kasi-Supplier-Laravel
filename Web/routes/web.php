<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
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


Route::get('/',[MainController::class,'index']);
Route::get('/Login',[MainController::class,'login']) ->name('Login');
Route::get('/Register',[MainController::class,'register']) -> name('Register');

Route::get('/Customer/Dashboard',[CustomerController::class,'index']) ->name('Dashboard');

Route::get('/Customer/Cart',[CustomerController::class,'cart']) ->name('Cart');
Route::get('/Customer/Market',[CustomerController::class,'market']) ->name('Market');
Route::get('/Customer/ProductView',[CustomerController::class,'product']) ->name('ProductView');
Route::get('/Customer/UserProfile',[CustomerController::class,'profile']) ->name('UserProfile');
Route::get('/Customer/Wishlist',[CustomerController::class,'wishlist']) ->name('Wishlist');



Route::get('/Customer/CreateProduct',[CustomerController::class,'create']) ->name('CreateProd');
