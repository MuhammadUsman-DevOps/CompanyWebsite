<?php

namespace App\Providers;
use App\Models\Product;
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
        View::composer('layouts.master', function ($view) {
        $view->with('nav_products', Product::where('is_active', true)->orderBy('order', 'asc')->get());
    });
    }
}
