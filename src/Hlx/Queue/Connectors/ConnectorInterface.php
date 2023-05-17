<?php

namespace Hlx\Queue\Connectors;

interface ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Hlx\Contracts\Queue\Queue
     */
    public function connect(array $config);
}
