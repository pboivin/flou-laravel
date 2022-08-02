<?php

namespace Pboivin\Flou\Laravel;

use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Pboivin\Flou\ImageFactory;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->app->singleton('flou.factory', function ($app) {
            if (Config::get('flou', false) === false) {
                throw new Exception("File 'config/flou.php' is missing.");
            }

            return new ImageFactory(Config::get('flou'));
        });
    }

    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../config/flou.php' => config_path('flou.php'),
            ],
            'flou-config'
        );

        $this->mergeConfigFrom(__DIR__ . '/../config/flou.php', 'flou');
    }
}
