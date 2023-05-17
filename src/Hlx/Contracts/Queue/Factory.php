<?php

namespace Hlx\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return \Hlx\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
