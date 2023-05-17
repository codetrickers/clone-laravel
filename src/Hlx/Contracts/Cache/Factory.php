<?php

namespace Hlx\Contracts\Cache;

interface Factory
{
    /**
     * Get a cache store instance by name.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Cache\Repository
     */
    public function store($name = null);
}
