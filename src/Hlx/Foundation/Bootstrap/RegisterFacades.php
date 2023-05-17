<?php

namespace Hlx\Foundation\Bootstrap;

use Hlx\Contracts\Foundation\Application;
use Hlx\Foundation\AliasLoader;
use Hlx\Foundation\PackageManifest;
use Hlx\Support\Facades\Facade;

class RegisterFacades
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Hlx\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        Facade::clearResolvedInstances();

        Facade::setFacadeApplication($app);

        AliasLoader::getInstance(array_merge(
            $app->make('config')->get('app.aliases', []),
            $app->make(PackageManifest::class)->aliases()
        ))->register();
    }
}
