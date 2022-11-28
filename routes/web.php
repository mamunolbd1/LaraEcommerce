<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\AdminProductsController;
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

//Frontend Part Route

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/product',[ProductsController::class,'index'])->name('product');


//Backend Part Route
Route::get('/admin',[AdminPagesController::class,'index'])->name('admin.index');

Route::get('/admin/products/create',[AdminProductsController::class,'create'])->name('admin.product.create');
Route::post('/admin/products/store',[AdminProductsController::class,'store'])->name('admin.product.store');

//