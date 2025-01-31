<?php

use App\Http\Controllers\SpareController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WavePaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SpareController::class, 'homepage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth', 'verified'])->name('upload');

Route::post('/upload', [SpareController::class, 'upload']);

Route::resource('spares', SpareController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::get('spares/{spare}', [SpareController::class, 'show'])->name('spares.show');

/* wave */
// In routes/web.php
Route::post('/wave/checkout', [WavePaymentController::class, 'checkout'])->name('wave.checkout');
Route::post('/wave/callback', [WavePaymentController::class, 'callback'])->name('wave.callback');
Route::get('/wave/return', [WavePaymentController::class, 'return'])->name('wave.return');

require __DIR__.'/auth.php';
