<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\SetLocale;
use Illuminate\Contracts\Http\Kernel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register middleware programmatically
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(SetLocale::class);
        
        // Set locale from session (this will still run)
        if (Session::has('locale')) {
            \Log::info('AppServiceProvider - Setting locale from session: ' . Session::get('locale'));
            App::setLocale(Session::get('locale'));
        }
    }
}
