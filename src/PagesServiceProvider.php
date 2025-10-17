<?php

namespace Mortezaa97\Pages;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Mortezaa97\Pages\Models\Page;
use Mortezaa97\Pages\Policies\PagePolicy;
use Mortezaa97\Shop\Models\Product;
use Mortezaa97\Shop\Policies\ProductPolicy;

class PagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'pages');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'pages');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        Gate::policy(Page::class, PagePolicy::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('shop.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../database/migrations' => database_path('migrations'),
            ], 'migrations');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'pages');

        // Register the main class to use with the facade
        $this->app->singleton('pages', function () {
            return new Pages;
        });
    }
}
