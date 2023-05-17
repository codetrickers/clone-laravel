<?php

namespace Hlx\Contracts\Broadcasting;

interface Factory
{
    /**
     * Get a broadcaster implementation by name.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Broadcasting\Broadcaster
     */
    public function connection($name = null);
}
