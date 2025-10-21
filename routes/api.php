<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| 🔹 Tugas 7 - Pengaturan akses berdasarkan role (admin & customer)
| - Read All + Destroy => hanya ADMIN
| - Create, Update, Show => hanya CUSTOMER
| - Genre & Author tetap pakai apiResource (public)
|
*/

// ====== Genre & Author (public) ======
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);

// ====== TRANSACTIONS ======

// CUSTOMER (akses: Create, Update, Show)
Route::middleware(['api', 'role:customer'])->group(function () {
    Route::post('/transactions', [TransactionController::class, 'store']);      // Create transaksi
    Route::put('/transactions/{id}', [TransactionController::class, 'update']); // Update transaksi
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);   // Show transaksi
});

// ADMIN (akses: Read All, Destroy)
Route::middleware(['api', 'role:admin'])->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index']);       // Lihat semua transaksi
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']); // Hapus transaksi
});
