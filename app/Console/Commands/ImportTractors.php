<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class ImportTractors extends Command
{
    protected $signature = 'app:import-tractors {file}';
    protected $description = 'Import tractors from CSV file';

    public function handle()
    {
        $user = User::first();
        if (!$user) {
            $this->error('No users found.');
            return 1;
        }

        $file = $this->argument('file');
        if (!Storage::disk('s3')->exists($file)) {
            $this->error("File not found: {$file}");
            return 1;
        }

        $stream = Storage::disk('s3')->readStream($file);
        $csv = Reader::createFromStream($stream);
        $csv->setHeaderOffset(0);
        
        DB::beginTransaction();
        try {
            foreach ($csv->getRecords() as $record) {
                Product::updateOrCreate(
                    ['part_number' => $record['part_number']], // Unique identifier
                    [
                        'category' => $record['category'],
                        'english_name' => $record['english_name'],
                        'myanmar_name' => $record['myanmar_name'],
                        'price' => intval(preg_replace('/[^0-9]/', '', $record['price'])),
                        'stock_quantity' => intval($record['stock_quantity']),
                        'movement_level' => $record['movement_level'],
                        'category_type' => $record['category_type'],
                        'price_range' => $record['price_range'],
                        'photo' => $record['photo'],
                        'slug' => $record['slug'],
                    ]
                );
            }
            DB::commit();
            $this->info('Import completed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->error('Import failed: ' . $e->getMessage());
        }
    }
}
