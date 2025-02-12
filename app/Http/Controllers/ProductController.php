<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
    
        $productsByType = $products->groupBy('category_type');
        $productsByCategory = $products->groupBy('category');
        
        return view('products.index', compact('productsByType', 'productsByCategory'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'message' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'part_number' => 'nullable|string|max:255',
            'english_name' => 'nullable|string|max:255',
            'myanmar_name' => 'nullable|string|max:255',
            'price' => 'nullable|integer',
            'stock_quantity' => 'nullable|integer',
            'movement_level' => 'nullable|string|max:255',
            'photo' => 'nullable|string|max:2550',
            'category_type' => 'nullable|string|max:255',
            'price_range' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);
 
        $request->user()->products()->create($validated);
 
        return redirect(route('products.index'));
    }


    // upprod
    public function upprod(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt|max:2048', // Limit file size to 2MB
        ]);

        // Get the original filename and extension
        $originalName = pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();

        // Append a simple timestamp (current Unix time) to prevent duplicates
        $timestamp = time(); // Returns current Unix timestamp
        $newFilename = "{$originalName}_{$timestamp}.{$extension}";

        // Store the file locally or on S3
        $path = $request->file('file')->storeAs('uploads', $newFilename, 's3'); // Change 'local' to 's3' if using S3

        // Full file path
        $fullPath = storage_path("app/{$path}");

        // Run the artisan command with the file path
        Artisan::call("app:import-tractors \"{$path}\"");

        return back()->with('success', "File uploaded as {$newFilename} and import started.");
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
