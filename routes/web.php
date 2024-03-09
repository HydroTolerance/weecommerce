<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;
use  App\Http\Controllers\AccountController;

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

Route::get('/', [ProductController::class, 'products'])->name('products.index');
Route::get('/product', [ProductController::class, 'products'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/product/delete/{product}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/product', [AccountController::class, 'registration'])->name('register.store');
