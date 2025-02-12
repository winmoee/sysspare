<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
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
