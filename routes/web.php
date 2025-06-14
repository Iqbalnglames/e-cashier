<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DailySummaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

Route::get('data-produk', [ProductController::class, 'index']);
Route::get('tambah-produk', [ProductController::class, 'create'])->name('tambah-produk');
Route::post('tambah-produk', [ProductController::class, 'store']);

Route::get('data-kategori', [CategoryController::class, 'index']);
Route::get('tambah-kategori', [CategoryController::class, 'create'])->name('tambah-kategori');
Route::post('tambah-kategori', [CategoryController::class, 'store']);

Route::get('/', [TransactionController::class, 'index'])->name('home');
Route::post('transaction', [TransactionController::class, 'store'])->name('transaction');
Route::get('statistik', [DailySummaryController::class, 'index']);
Route::get('history', [DailySummaryController::class, 'transactionHistory']);
Route::get('history/{history}', [DailySummaryController::class, 'transactionDetails']);
