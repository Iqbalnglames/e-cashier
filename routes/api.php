<?php

use App\Http\Controllers\APi\CategoryController;
use App\Http\Controllers\APi\ProductController;
use App\Http\Controllers\APi\TransactionController;
use App\Http\Controllers\Api\WhatsAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/whatsapp/send', [WhatsAppController::class, 'send']);

Route::get('data-produk', [ProductController::class, 'index']);
Route::get('data-kategori', [CategoryController::class, 'index']);
Route::post('tambah-kategori', [CategoryController::class, 'store']);
Route::get('detail-kategori/{category}', [CategoryController::class, 'edit']);
Route::put('update-kategori/{category}', [CategoryController::class, 'update']);
Route::delete('hapus-kategori/{category}', [CategoryController::class, 'destroy']);
Route::get('data-produk', [ProductController::class, 'index']);
Route::get('detail-produk/{product}', [ProductController::class, 'edit']);
Route::put('update-produk/{product}', [ProductController::class, 'update']);
Route::delete('hapus-produk/{product}', [ProductController::class, 'destroy']);
Route::post('tambah-produk', [ProductController::class, 'store']);
Route::get('data-transaksi', [TransactionController::class, 'index']);
Route::post('transaksi', [TransactionController::class, 'store'])->name('transaction');
