<?php

namespace App\Providers;

use Laravel\Passport\Passport; // <-- import ini
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Passport::ignoreRoutes(); // <-- tambahkan ini
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}