<?php

namespace Hlx\Http\Client\Events;

use Hlx\Http\Client\Request;

class ConnectionFailed
{
    /**
     * The request instance.
     *
     * @var \Hlx\Http\Client\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Http\Client\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
