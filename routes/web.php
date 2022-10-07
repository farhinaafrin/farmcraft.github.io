<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
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
    return view('website.home');
})->name('website');
Route::get('/about', function () {
    return view('website.about');
})->name('about');

Route::get('/news', function () {
    return view('website.news');
})->name('news');
Route::get('/team', function () {
    return view('website.team');
})->name('team');

Route::get('/gallery', function () {
    return view('website.gallery');
})->name('gallery');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('contact',ContactController::class);
Route::resource('products',ProductController::class);
Route::resource('categories',CategoryController::class);

Route::resource('cart',CartController::class);
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');

Route::resource('wishlist',WishlistController::class);

Route::resource('checkout',CheckoutController::class);
Route::get('/thankyou', function () {
    return view('website.thankyou');
})->name('thanks');