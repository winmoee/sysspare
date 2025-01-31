<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use App\Models\Spare;
use App\Models\User;

class ImportSpares extends Command
{
    protected $signature = 'app:import-spares {file}';
    protected $description = 'Import spares from CSV file';

    public function handle()
    {
        // First, let's make sure we have a user to associate with
        $user = User::first(); // Get the first user in the system
        
        if (!$user) {
            $this->error('No users found in the system. Please create a user first.');
            return 1;
        }

        $file = $this->argument('file');
        
        // Create CSV reader
        $csv = Reader::createFromPath($file, 'r');
        $csv->setHeaderOffset(0);
        
        $records = $csv->getRecords();
        
        DB::beginTransaction();
        
        try {
            foreach ($records as $record) {
                Spare::create([
                    'category' => $record['category'],
                    'part_number' => $record['part_number'],
                    'english_name' => $record['english_name'],
                    'myanmar_name' => $record['myanmar_name'],
                    'price' => intval(preg_replace('/[^0-9]/', '', $record['price'])),
                    'stock_quantity' => intval($record['stock_quantity']),
                    'movement_level' => $record['movement_level'],
                    'category_type' => $record['category_type'],
                    'price_range' => $record['price_range'],
                    'photo' => $record['photo'],
                ]);
            }
            
            DB::commit();
            $this->info('Import completed successfully!');
            
        } catch (\Exception $e) {
            DB::rollBack();
            $this->error('Import failed: ' . $e->getMessage());
        }
    }
}