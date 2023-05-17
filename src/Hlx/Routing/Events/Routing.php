<?php

namespace Hlx\Routing\Events;

class Routing
{
    /**
     * The request instance.
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
    public function __construct($request)
    {
        $this->request = $request;
    }
}
