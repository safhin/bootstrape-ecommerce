<?php

use App\Http\Controllers\Frontend\Seller\LoginController;
use App\Http\Controllers\Frontend\Seller\LogoutController;
use App\Http\Controllers\Frontend\Seller\RegistrationController;
use App\Http\Controllers\Frontend\Seller\SellerController;
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

//Backend 
Route::get('admin/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('seller/register',[RegistrationController::class, 'registration'])->name('seller.registration');

Route::post('seller/register/register',[RegistrationController::class, 'signUp'])->name('seller.signUp');

Route::get('seller/login',[LoginController::class, 'index'])->name('seller.login');
Route::post('seller/authenticate',[LoginController::class, 'authenticate'])->name('seller.authenticate');
Route::post('seller/logut',[LogoutController::class, 'logout'])->name('seller.logout');


Route::get('seller/create',[SellerController::class, 'create'])->name('seller.create');
Route::get('seller/account',[SellerController::class, 'account'])->name('seller.account');

Route::get('/', function () {
    return view('frontend.main');
});
