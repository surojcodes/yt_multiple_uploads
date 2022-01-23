<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);
Route::post('/add-product',[ProductController::class,'store']);
Route::get('/product-images/{id}',[ProductController::class,'images'])->name('product.images');
