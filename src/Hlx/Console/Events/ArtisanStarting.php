<?php

namespace Hlx\Console\Events;

class ArtisanStarting
{
    /**
     * The Artisan application instance.
     *
     * @var \Hlx\Console\Application
     */
    public $artisan;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Console\Application  $artisan
     * @return void
     */
    public function __construct($artisan)
    {
        $this->artisan = $artisan;
    }
}
