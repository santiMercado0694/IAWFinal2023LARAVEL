<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [CartController::class, 'shop'])->name('shop');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->middleware(['auth'])->name('cart.index');

Route::get('/buy', [CartController::class, 'buy'])->name('buy');

Route::post('/add', [CartController::class, 'add'])->name('cart.store');

Route::post('/update', [CartController::class, 'update'])->name('cart.update');

Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::post('/pagar', [CartController::class, 'pagar'])->name('cart.pagar');

Route::resource('products', ProductController::class)->middleware(['auth']);




require __DIR__.'/auth.php';
