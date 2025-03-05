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

// new pages
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/sales', function () {
    return view('sales');
})->name('sales');
Route::get('/division', function () {
    return view('division');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// PRODUCTS
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::resource('products', ProductController::class)
    ->only(['store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('products', ProductController::class)
->only(['index']);

// UPLOAD
Route::post('/upload', [SpareController::class, 'upload']);
Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth', 'verified'])->name('upload');

// UPLOADPROD
Route::post('/upprod', [ProductController::class, 'upprod']);
Route::get('/upprod', function () {
    return view('upprod');
})->middleware(['auth', 'verified'])->name('upprod');

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

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'my'])) { // English and Burmese
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('locale.switch');

require __DIR__.'/auth.php';
