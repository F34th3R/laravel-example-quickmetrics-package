<?php

namespace feather\Quickmetrics;

use Illuminate\Support\ServiceProvider;

class QuickmetricsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /* In the root folder 
            -> artisan vendor:publish 
            -> and select feather/Quickmetrics/QuickmetricsServiceProvider
         */
        $this->publishes([
            __DIR__ . '/../config/quickmetrics.php' => config_path('quickmetrics.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Quickmetrics::class, function() {
            return new Quickmetrics();
        });
    }
}
