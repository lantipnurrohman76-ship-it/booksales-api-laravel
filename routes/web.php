<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Halaman utama
Route::get('/', [HomeController::class, 'index']);

// Halaman genre
Route::get('/genre', [GenreController::class, 'index']);

// Halaman author
Route::get('/author', [AuthorController::class, 'index']);

// Halaman book
Route::get('/book', [BookController::class, 'index']);
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 746499d (Tugas 2 Laravel)
