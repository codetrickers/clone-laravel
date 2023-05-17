<?php

namespace Hlx\Foundation\Providers;

use Hlx\Contracts\Support\DeferrableProvider;
use Hlx\Database\MigrationServiceProvider;
use Hlx\Support\AggregateServiceProvider;

class ConsoleSupportServiceProvider extends AggregateServiceProvider implements DeferrableProvider
{
    /**
     * The provider class names.
     *
     * @var string[]
     */
    protected $providers = [
        ArtisanServiceProvider::class,
        MigrationServiceProvider::class,
        ComposerServiceProvider::class,
    ];
}
