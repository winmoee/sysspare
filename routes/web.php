<?php

use App\Http\Controllers\SpareController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WavePaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarketController;
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
})->name('transport');
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

// Market category route
Route::get('/market/category/{category}', [MarketController::class, 'category'])->name('market.category');

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
Route::get('/prods/{slug}', [ProductController::class, 'showproducts'])->name('products.showproducts');

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
Route::get('/tractor', [ProductController::class, 'tractor'])->name('products.tractor');

Route::get('/walkingtractor', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.walkingtractor', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/walkingtractor', [ProductController::class, 'walkingtractor'])->name('products.walkingtractor');

Route::get('/combineharvester', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.combineharvester', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/combineharvester', [ProductController::class, 'combineharvester'])->name('products.combineharvester');

Route::get('/dieselengine', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.dieselengine', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/dieselengine', [ProductController::class, 'dieselengine'])->name('products.dieselengine');

Route::get('/implements', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.implements', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/implements', [ProductController::class, 'implements'])->name('products.implements');

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

Route::get('/otherbrands', function () {
    $products = Product::all(); // get products from DB

    // Group by category (assuming `category` column exists)
    $productsByCategory = $products->groupBy('category');

    return view('products.otherbrands', [
        'productsByCategory' => $productsByCategory
    ]);
});
Route::get('/otherbrands', [ProductController::class, 'otherbrands'])->name('products.otherbrands');


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

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Temporary route for product export (Remember to remove this after use!)
Route::get('/export-products', function () {
    $products = Product::all();

    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename=products_export.csv',
    ];

    $callback = function() use ($products) {
        $handle = fopen('php://output', 'w');

        // Add headers
        fputcsv($handle, [
            'category',
            'part_number',
            'english_name',
            'myanmar_name',
            'price',
            'stock_quantity',
            'movement_level',
            'category_type',
            'price_range',
            'photo',
            'slug'
        ]);

        // Add data rows
        foreach ($products as $product) {
            fputcsv($handle, [
                $product->category,
                $product->part_number,
                $product->english_name,
                $product->myanmar_name,
                $product->price,
                $product->stock_quantity,
                $product->movement_level,
                $product->category_type,
                $product->price_range,
                $product->photo,
                $product->slug
            ]);
        }

        fclose($handle);
    };

    return response()->stream($callback, 200, $headers);
})->middleware('auth');

// Temporary route to delete problematic product (Remember to remove this route after use!)
Route::get('/delete-implement-product', function () {
    try {
        $product = Product::where('category', 'Implements')
                         ->where('english_name', 'Plough frame')
                         ->first();

        if ($product) {
            $product->delete();
            return "Product deleted successfully!";
        }

        return "Product not found.";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
})->middleware(['auth']);

// Temporary route to delete ALL products (Remember to remove this route after use!)
Route::get('/delete-all-products', function () {
    try {
        $productCount = Product::count();

        if ($productCount === 0) {
            return "No products found to delete.";
        }

        Product::truncate();

        return "Successfully deleted {$productCount} products! Database has been reset.";
    } catch (\Exception $e) {
        return "Error deleting products: " . $e->getMessage();
    }
})->middleware(['auth']);

require __DIR__.'/auth.php';

// Add these routes after the existing transport route
// Update the transport.driver route (around line 309-326)
Route::get('/transport/driver/{id}', function($id) {
    $transports = [
        1 => [
            'name' => 'ကိုဇော်',
            'location' => 'ရန်ကုန် (အထိုင်)',
            'service' => 'ကုန်တင်',
            'phone' => '09755197771',
            'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FuqBASiafntLxxzNmnv5U.jpg',
            'vehicles' => '၆ ဘီးကားနှစ်စီး',
            'description' => 'ယုံကြည်စိတ်ချရသော ကုန်တင်ယာဉ် ဝန်ဆောင်မှု'
        ],
        2 => [
            'name' => 'ကိုဇော်လင်း',
            'location' => 'ရန်ကုန် (အထိုင်)',
            'service' => 'ကုန်တင်',
            'phone' => '09420024220',
            'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_1275,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2Ff9BnHZRwyCIr2Yd9xVs7.jpg',
            'vehicles' => '၆ ဘီးကား ၁၉ ပေ (၁) စီး / ၆ဘီးကား ၁၄ ပေ (၁) စီး',
            'description' => 'ယုံကြည်စိတ်ချရသော ကုန်တင်ယာဉ် ဝန်ဆောင်မှု'
        ],
        3 => [
            'name' => 'ကိုစောဂေးဒို',
            'location' => 'ကန်ကြီးထောင့်မြို့နယ် / ရန်ကုန် (အထိုင်)',
            'service' => 'ကုန်တင်',
            'phone' => '095201489',
            'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FuqBASiafntLxxzNmnv5U.jpg',
            'vehicles' => '၁၂ ဘီးကား (၃) စီး',
            'description' => 'ယုံကြည်စိတ်ချရသော ကုန်တင်ယာဉ် ဝန်ဆောင်မှု'
        ],
        4 => [
            'name' => 'ကိုမြင့်ဇော်',
            'location' => 'ကန်ကြီးထောင့်မြို့နယ် (အထိုင်)',
            'service' => 'ကုန်တင်',
            'phone' => '09250819910',
            'image' => 'https://res.cloudinary.com/glide/image/fetch/f_auto,w_500,c_limit/https%3A%2F%2Fstorage.googleapis.com%2Fglide-prod.appspot.com%2Fuploads-v2%2FZ0OQglYOi4ngIdfrgs41%2Fpub%2FBIbQUPgbKyWxKSAptq5Z.jpg',
            'vehicles' => '၁၈ပေ (၂) စီး၊ ၁၆ပေ (၁) စီး',
            'description' => 'ယုံကြည်စိတ်ချရသော ကုန်တင်ယာဉ် ဝန်ဆောင်မှု'
        ]
    ];

    $transport = $transports[$id] ?? null;
    if (!$transport) {
        abort(404);
    }

    return view('service.transport-detail', compact('transport'));
})->name('transport.driver');
