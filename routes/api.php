<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\LeverancierController;


// Magazijn Overview
Route::get('magazijnen.index', [MagazijnController::class, 'index'])->name('magazijnen.index');

// Leverancier info
Route::get('/magazijn/{id}/leverantieInfo', [MagazijnController::class, 'leverantieInfo'])->name('magazijn.leverantieInfo');