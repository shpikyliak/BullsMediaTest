<?php

namespace App\Providers;

use App\Components\Delivery\DeliveryInterface;
use App\Components\Delivery\DeliveryResolver;
use Illuminate\Support\Facades\Route;
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
        //Bind Delivery Resolver to "delivery" slug for dependency injection in controller
        Route::bind('delivery',  function ($deliverySlug){
            return new DeliveryResolver($deliverySlug);
        });
    }
}
