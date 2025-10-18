<?php


// Magazijn OverView 

use App\Http\Controllers\MagazijnController;
use Illuminate\Routing\Route;


// Magazijn Overview
Route::get('magazijnen.index', [MagazijnController::class, 'index'])->name('magazijnen.index');
