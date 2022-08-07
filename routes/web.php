<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EletrodomesticoController;

// GETs
Route::get('/', [EletrodomesticoController::class, 'index']);
Route::get('/create', [EletrodomesticoController::class, 'create']);

// POSTs
Route::post('/', [EletrodomesticoController::class, 'store']);
