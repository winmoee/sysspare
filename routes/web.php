<?php

use App\Http\Controllers\SpareController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WavePaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SpareController::class, 'homepage']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/transport', function () {
    return view('service/transport');
});
Route::get('/serviceteam', function () {
    return view('service/serviceteam');
});
Route::get('/serviceworkshop', function () {
    return view('service/serviceworkshop');
});
Route::get('/serviceaward', function () {
    return view('service/serviceaward');
});
Route::get('/market', function () {
    return view('service/market');
});
Route::get('/feedback', function () {
    return view('service/feedback');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth', 'verified'])->name('upload');

// PRODUCTS
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::resource('products', ProductController::class)
    ->only(['store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('products', ProductController::class)
->only(['index']);

// UPLOAD
Route::post('/upload', [SpareController::class, 'upload']);

// SPARES
Route::resource('spares', SpareController::class)
    ->only(['store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('spares', SpareController::class)
->only(['index']);

Route::get('spares/{spare}', [SpareController::class, 'show'])->name('spares.show');

/* wave */
// In routes/web.php
Route::post('/wave/checkout', [WavePaymentController::class, 'checkout'])->name('wave.checkout');
Route::post('/wave/callback', [WavePaymentController::class, 'callback'])->name('wave.callback');
Route::get('/wave/return', [WavePaymentController::class, 'return'])->name('wave.return');

require __DIR__.'/auth.php';
