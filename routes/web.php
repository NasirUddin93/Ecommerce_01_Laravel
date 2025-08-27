<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('orders', 'App\Http\Controllers\OrderController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('payments', 'App\Http\Controllers\PaymentController');
Route::resource('shippings', 'App\Http\Controllers\ShippingController');
Route::resource('admin-staff', 'App\Http\Controllers\AdminStaffController');    


Route::delete('/product-images/{id}', [ProductImageController::class, 'destroy'])
    ->name('product-images.destroy');
