<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;

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

Route::get('/products', [FruitsController::class, 'index'])->name('products.index');

Route::get('/products/register', [FruitsController::class, 'register'])->name('products.register');

Route::get('/products/search', [FruitsController::class, 'search'])->name('products.search');

Route::get('/products/{productId}', [FruitsController::class, 'detail'])->name('products.detail');

Route::patch('/products/{productId}/update', [FruitsController::class, 'update'])->name('products.update');

Route::delete('/products/{productId}/delete', [FruitsController::class, 'delete'])->name('products.delete');

Route::post('/products/register', [fruitsController::class, 'store'])->name('products.store');