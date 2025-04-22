<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SetupStorage extends Command
{
    protected $signature = 'storage:setup';
    protected $description = 'Setup storage directories and permissions';

    public function handle()
    {
        // Create public/images directory if it doesn't exist
        $imagesPath = public_path('images');
        if (!File::exists($imagesPath)) {
            File::makeDirectory($imagesPath, 0755, true);
            $this->info('Created images directory');
        }

        // Create storage link if it doesn't exist
        if (!File::exists(public_path('storage'))) {
            $this->call('storage:link');
            $this->info('Created storage link');
        }

        // Set proper permissions
        File::chmod($imagesPath, 0755);
        $this->info('Set proper permissions');

        $this->info('Storage setup completed successfully');
    }
} 