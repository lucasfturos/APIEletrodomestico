<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EletrodomesticoController;


// GETs
Route::get('/', [EletrodomesticoController::class, 'index'])->name('home');
Route::get('/create', [EletrodomesticoController::class, 'create'])->name('create');
Route::get('/edit/{id}', [EletrodomesticoController::class, 'edit'])->name('edit');

// POSTs
Route::post('/', [EletrodomesticoController::class, 'store']);

// Delete
Route::delete('{id}', [EletrodomesticoController::class, 'destroy'])->name('destroy');

// PUT
Route::put('/update/{id}', [EletrodomesticoController::class, 'update'])->name('update');
