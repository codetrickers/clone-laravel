<?php

namespace Hlx\Queue\Events;

class JobPopped
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
     * The job instance.
     *
     * @var \Hlx\Contracts\Queue\Job|null
     */
    public $job;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  \Hlx\Contracts\Queue\Job|null  $job
     * @return void
     */
    public function __construct($connectionName, $job)
    {
        $this->connectionName = $connectionName;
        $this->job = $job;
    }
}
