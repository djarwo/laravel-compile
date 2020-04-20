<?php

namespace Djarwo\DemoPackage\Providers;

use Illuminate\Support\ServiceProvider;

class DemoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->publishes([
            __DIR__.'/../resources/config/demo.php' => config_path('demo.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'demo');

        // $this->publishes([
        //     __DIR__.'/../resources/views' => resource_path('views/vendor/demo'),
        // ]);

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'demo');

        // $this->publishes([
        //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/demo'),
        // ]);
    }
}
