<?php

use App\Http\Controllers\APi\CategoryController;
use App\Http\Controllers\APi\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('data-produk', [ProductController::class, 'index']);
Route::get('data-kategori', [CategoryController::class, 'index']);
Route::get('simpan-kategori', [CategoryController::class, 'store']);
Route::get('data-produk', [ProductController::class, 'index']);
