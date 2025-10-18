<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\LeverancierController;


// Magazijn Overview
Route::get('magazijnen.index', [MagazijnController::class, 'index'])->name('magazijnen.index');

// LeverAncier info 

Route::get('/leverancier/{id}', [LeverancierController::class, 'show'])->name('leverancier.show');