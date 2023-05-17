<?php

namespace Hlx\Http\Client\Events;

use Hlx\Http\Client\Request;
use Hlx\Http\Client\Response;

class ResponseReceived
{
    /**
     * The request instance.
     *
     * @var \Hlx\Http\Client\Request
     */
    public $request;

    /**
     * The response instance.
     *
     * @var \Hlx\Http\Client\Response
     */
    public $response;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Http\Client\Request  $request
     * @param  \Hlx\Http\Client\Response  $response
     * @return void
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
}
