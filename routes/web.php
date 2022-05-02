<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
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

Route::get('/buy', [CartController::class, 'buy'])->middleware(['auth'])->name('buy');

Route::post('/add', [CartController::class, 'add'])->middleware(['auth'])->middleware(['auth'])->name('cart.store');

Route::post('/update', [CartController::class, 'update'])->middleware(['auth'])->name('cart.update');

Route::post('/remove', [CartController::class, 'remove'])->middleware(['auth'])->name('cart.remove');

Route::post('/clear', [CartController::class, 'clear'])->middleware(['auth'])->name('cart.clear');

Route::post('/pagar', [CartController::class, 'pagar'])->middleware(['auth'])->name('cart.pagar');

Route::get('edit/{id}', [ProductController::class, 'editar'])->middleware(['auth'])->name('product.editar');

Route::get('create', [ProductController::class, 'crear'])->middleware(['auth'])->name('product.crear');

Route::post('edit', [ProductController::class, 'actualizar'])->middleware(['auth'])->name('product.actualizar');

Route::post('create', [ProductController::class, 'crearProducto'])->middleware(['auth'])->name('product.crearProducto');

Route::get('/shop', [CartController::class, 'shop'])->middleware(['auth'])->name('shop');

Route::get('/users', [UserController::class, 'mostrar'])->middleware(['auth'])->name('user.index');

Route::get('delete/{id}', [UserController::class, 'destruir'])->middleware(['auth'])->name('user.destruir');

//Route::post('products/{id}/edit', [ProductController::class, 'update'])->name('product.update');

Route::resource('products', ProductController::class)->middleware(['auth']);




require __DIR__.'/auth.php';
