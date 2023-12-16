<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreKeeperController;

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


Route::get('/home', [StoreKeeperController::class, 'home'])->name('home');





Route::get('/create_product', [ProductController::class, 'Create_product'])->name('create_product');
Route::post('/products', [ProductController::class, 'store'])->name('products_store');
Route::get('/productstore', [ProductController::class, 'productStoreMessage'])->name('products_index');



Route::get('/sales_create', [SaleController::class, 'create'])->name('sales_create');
Route::post('/sales_store', [SaleController::class, 'store'])->name('sales_store');
Route::get('/sales_index', [SaleController::class, 'index'])->name('sales_index');