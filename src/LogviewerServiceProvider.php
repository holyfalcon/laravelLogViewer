<?php

namespace Falcon\Logviewer;
use Falcon\Logviewer\Controllers\LogviewerController;
use Illuminate\Support\ServiceProvider;

class LogviewerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'logviewer');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/falcon/logviewer'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Falcon\Logviewer\Controllers\LogviewerController');
    }
}
