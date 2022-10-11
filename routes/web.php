<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::resource('/orders', 'OrderController');
Route::resource('/product', 'ProductTableController');
Route::resource('/order_details', 'OrderDetailController');
Route::resource('/supplier', 'SupplierTableController');
Route::resource('/users', 'UserController');
Route::resource('/companies', 'CompaniesTableController');
Route::resource('/orders', 'OrderController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
