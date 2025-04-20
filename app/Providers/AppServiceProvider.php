<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use App\Http\Middleware\SetLocale;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\Facades\Route;

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
        Route::pushMiddlewareToGroup('web', SetLocale::class);
        // Set locale from session (this will still run)
        if (Session::has('locale')) {
            Log::info('AppServiceProvider - Setting locale from session: ' . Session::get('locale'));
            App::setLocale(Session::get('locale'));
        }
    }
}
