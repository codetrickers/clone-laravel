<?php

namespace Hlx\Foundation\Http\Events;

class RequestHandled
{
    /**
     * The request instance.
     *
     * @var \Hlx\Http\Request
     */
    public $request;

    /**
     * The response instance.
     *
     * @var \Hlx\Http\Response
     */
    public $response;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Http\Request  $request
     * @param  \Hlx\Http\Response  $response
     * @return void
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
