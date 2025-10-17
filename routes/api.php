<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CharacterController;

// ROUTE API UNTUK ONE PIECE
Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/{id}', [CharacterController::class, 'show']);
Route::post('/characters', [CharacterController::class, 'store']);
Route::put('/characters/{id}', [CharacterController::class, 'update']);
Route::delete('/characters/{id}', [CharacterController::class, 'destroy']);
