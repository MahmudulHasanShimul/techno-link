<?php

namespace App\Providers;

use App\Models\ReSeller;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('admin.includes.sidebar', function($view){
            $view->with('reSellers',ReSeller::all());
        });
    }
}
