<?php

use App\Http\Controllers\SpareController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WavePaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Models\Product;

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
Route::get('/test', function () {
    return view('test');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// PRODUCTS
Route::get('/brands/{slug}', [ProductController::class, 'showbrands'])->name('products.showbrands');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::resource('products', ProductController::class)
    ->only(['store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('products', ProductController::class)
->only(['index']);

Route::get('/tractor', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.tractor', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/tractor', [ProductController::class, 'tractor']);

Route::get('/yanmar', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.yanmar', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/yanmar', [ProductController::class, 'yanmar'])->name('products.yanmar');

Route::get('/ace', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.ace', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/ace', [ProductController::class, 'ace'])->name('products.ace');

Route::get('/sifang', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.sifang', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/sifang', [ProductController::class, 'sifang'])->name('products.sifang');


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

// Add this route for language switching
Route::get('/language/{locale}', function($locale) {
    if (in_array($locale, ['en', 'my'])) {
        App::setLocale($locale);
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('locale.switch');

require __DIR__.'/auth.php';
