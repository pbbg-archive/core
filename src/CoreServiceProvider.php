<?php

namespace Pbbg\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the package services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register the package services.
     */
    public function register(): void
    {
        $this->configure();
    }

    /**
     * Setup the PBBG configuration.
     */
    protected function configure(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pbbg.php', 'pbbg'
        );
    }
}
