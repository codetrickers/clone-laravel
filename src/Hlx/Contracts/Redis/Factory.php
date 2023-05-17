<?php

namespace Hlx\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string|null  $name
     * @return \Hlx\Redis\Connections\Connection
     */
    public function connection($name = null);
}
