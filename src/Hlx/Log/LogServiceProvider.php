<?php

namespace Hlx\Log;

use Hlx\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('log', fn ($app) => new LogManager($app));
    }
}
