<?php

namespace OrganizationName;

use Illuminate\Support\ServiceProvider;
use OrganizationName\Make\Commands\ProjectName;

class OrganizationName extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        $configPath = __DIR__ . '/../config/config.php';
        $this->publishes([
            $configPath => config_path('/.php'),
        ]);
        */
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('make.OrganizationName', function ($app) {
            return new Framework($app);
        });
        $this->commands([
                            'make.OrganizationName',
                        ]);
    }
}