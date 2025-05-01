<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class ExportProductsCommand extends Command
{
    protected $signature = 'products:export';
    protected $description = 'Export products to CSV file';

    public function handle()
    {
        $products = Product::all();
        
        $filename = storage_path('app/products_export.csv');
        
        $handle = fopen($filename, 'w');
        
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
        
        $this->info('Products exported successfully to: ' . $filename);
    }
} 