<?php

namespace Hlx\Auth\Events;

use Hlx\Http\Request;

class Lockout
{
    /**
     * The throttled request.
     *
     * @var \Hlx\Http\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
