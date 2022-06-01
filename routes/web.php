<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/crud',[PageController::class,'crudIndex']);

Route::get('/crud/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/crud/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/crud/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/crud/category/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/crud/category/{id}/update',[CategoryController::class,'update'])->name('category.update');
Route::delete('/crud/category/{id}/delete',[CategoryController::class,'destroy'])->name('category.destroy');
Route::get('/crud/category/search',[CategoryController::class,'search'])->name('category.search');


Route::get('/crud/product',[ProductController::class,'index'])->name('product.index');
Route::get('/crud/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/crud/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('/crud/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::post('/crud/product/{id}/update',[ProductController::class,'update'])->name('product.update');
Route::delete('/crud/product/{id}/delete',[ProductController::class,'destroy'])->name('product.destroy');
Route::get('/crud/product/search',[ProductController::class,'search'])->name('product.search');
