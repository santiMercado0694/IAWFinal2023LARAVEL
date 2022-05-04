<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;

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

//Rutas del carrito

Route::get('/', [CartController::class, 'shop'])->name('shop');

Route::get('/shop', [CartController::class, 'shop'])->name('shop');

Route::get('/shopF', [CartController::class, 'shopF'])->name('shopF');

Route::get('/cart', [CartController::class, 'cart'])->middleware(['auth'])->name('cart.index');

Route::get('/shop', [CartController::class, 'filtro'])->name('cart.shopFiltro');

Route::get('/shop/filtro', [CartController::class, 'buscar'])->name('cart.buscar');

Route::get('/buy', [CartController::class, 'buy'])->middleware(['auth'])->name('buy');

Route::get('/resumen', [CartController::class, 'pagar'])->middleware(['auth'])->name('cart.pagar');

Route::post('/add', [CartController::class, 'add'])->middleware(['auth'])->middleware(['auth'])->name('cart.store');

Route::post('/update', [CartController::class, 'update'])->middleware(['auth'])->name('cart.update');

Route::post('/remove', [CartController::class, 'remove'])->middleware(['auth'])->name('cart.remove');

Route::post('/clear', [CartController::class, 'clear'])->middleware(['auth'])->name('cart.clear');

//Rutas del crud producto

Route::get('edit/{id}', [ProductController::class, 'editar'])->middleware(['auth'])->name('product.editar');

Route::get('create', [ProductController::class, 'crear'])->middleware(['auth'])->name('product.crear');

Route::post('edit', [ProductController::class, 'actualizar'])->middleware(['auth'])->name('product.actualizar');

Route::post('create', [ProductController::class, 'crearProducto'])->middleware(['auth'])->name('product.crearProducto');

Route::resource('products', ProductController::class)->middleware(['auth']);


//Rutas del crud de usuarios

Route::get('/users', [UserController::class, 'mostrar'])->middleware(['auth'])->name('user.index');

Route::get('delete/{id}', [UserController::class, 'destruir'])->middleware(['auth'])->name('user.destruir');


//Rutas del crud de categorias

Route::get('/categorias', [CategoriaController::class, 'mostrar'])->middleware(['auth'])->name('categoria.index');

Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->middleware(['auth'])->name('categoria.show');

Route::get('crearCategoria', [CategoriaController::class, 'crear'])->middleware(['auth'])->name('categoria.crear');

Route::get('editarCategoria/{id}', [CategoriaController::class, 'editar'])->middleware(['auth'])->name('categoria.editar');

Route::post('editarCategoria', [CategoriaController::class, 'actualizar'])->middleware(['auth'])->name('categoria.actualizar');

Route::post('crearCategoria', [CategoriaController::class, 'crearCategoria'])->middleware(['auth'])->name('categoria.crearCategoria');

Route::get('categoria/delete/{id}', [CategoriaController::class, 'destruir'])->middleware(['auth'])->name('categoria.destruir');


require __DIR__.'/auth.php';