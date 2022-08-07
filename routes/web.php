<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EletrodomesticoController;

// GETs
Route::get('/', [EletrodomesticoController::class, 'index']);
Route::get('/create', [EletrodomesticoController::class, 'create']);
Route::get('/edit/{id}', [EletrodomesticoController::class, 'edit']);

// POSTs
Route::post('/', [EletrodomesticoController::class, 'store']);

// Delete
Route::delete('/{id}', [EletrodomesticoController::class, 'destroy']);

// PUT
Route::put('/update/{id}', [EletrodomesticoController::class, 'update']);
