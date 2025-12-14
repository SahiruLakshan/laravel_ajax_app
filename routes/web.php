<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/view', [ProductController::class, 'view']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
Route::post('/products/update/{id}', [ProductController::class, 'update']);
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy']);

