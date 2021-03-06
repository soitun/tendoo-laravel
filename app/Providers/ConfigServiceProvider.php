<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Menus;

class ConfigServiceProvider extends ServiceProvider
{
    protected $defer    =   true;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Menus::class, function ($app) {
            return new Menus();
        });        
    }
}
