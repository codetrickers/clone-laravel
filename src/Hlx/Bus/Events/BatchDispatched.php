<?php

namespace Hlx\Bus\Events;

use Hlx\Bus\Batch;

class BatchDispatched
{
    /**
     * The batch instance.
     *
     * @var \Hlx\Bus\Batch
     */
    public $batch;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Bus\Batch  $batch
     * @return void
     */
    public function __construct(Batch $batch)
    {
        $this->batch = $batch;
    }
}
