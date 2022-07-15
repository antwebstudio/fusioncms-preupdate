<?php

namespace Ant\PreFusionUpdate;

use Illuminate\Support\ServiceProvider;

class FusionUpdateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->loadMigrationsFrom(__DIR__.'/resources/database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
