<?php

namespace Sontus\ContractForm;
use Illuminate\Support\ServiceProvider;

class ContractFormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('contractform.php'),
        ], 'contactform-config');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contractform');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }
}
