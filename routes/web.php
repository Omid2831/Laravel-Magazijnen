<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\MagazijnController;
use App\Http\Controllers\LeverancierController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// Magazijn Overview
Route::get('magazijnen.index', [MagazijnController::class, 'index'])->name('magazijnen.index');

// allergeen info
Route::get('/magazijn/{id}/allergenenInfo', [MagazijnController::class, 'allergenenInfo'])->name('magazijn.allergenenInfo');
// Leverancier info
Route::get('/magazijn/{id}/leverantieInfo', [MagazijnController::class, 'leverantieInfo'])->name('magazijn.leverantieInfo');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';
