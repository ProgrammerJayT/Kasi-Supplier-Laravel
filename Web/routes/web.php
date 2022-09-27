<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;

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

//Products
Route::get('/Customer/Market',[ProductController::class,'index']) ->name('Market');
Route::get('/Customer/ProductView',[ProductController::class,'product']) ->name('ProductView');

Route::get('/Customer/UserProfile',[CustomerController::class,'profile']) ->name('UserProfile');
Route::get('/Customer/Wishlist',[CustomerController::class,'wishlist']) ->name('Wishlist');

Route::get('/Customer/BankingInformation',[CustomerController::class,'bankDetails']) ->name('BankingDetails');
Route::get('/Customer/ConfirmPayment',[PaymentController::class,'index']) ->name('Payment');



Route::get('/Customer/CreateProduct',[CustomerController::class,'create']) ->name('CreateProd');


Route::get('/Admin/Dashboard',[AdminController::class,'index']) ->name('AdminDashboard');
Route::get('/Admin/Market',[AdminController::class,'markets']) ->name('AdminMarket');
Route::get('/Admin/AccountApproval',[AdminController::class,'approve']) ->name('AdminApproval');


//User Login
// Route::POST('/Login', [MainController::class, 'validateUser']) -> name('Login');

//Add User
// Route::POST('/Register', [MainController::class, 'addUser']) -> name('Register');


Route::POST('/Register', [RegisterController::class, 'create_user']) -> name('Register');

Route::POST('/Login', [RegisterController::class, 'user_login']) -> name('Login');



//Create Product
Route::POST('/Customer/CreateProduct',[ProductController::class,'create']) ->name('CreateProd');

//Payment Create
Route::POST('/Customer/ConfirmPayment',[PaymentController::class,'create']) ->name('Payment');

//Store Banking Details
Route::POST('/Customer/BankingInformation',[PaymentController::class,'store']) ->name('BankingDetails');

Route::get('/Logout',[CustomerController::class,'Logout_user']) ->name('Logout');
