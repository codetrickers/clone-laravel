<?php

namespace Hlx\Routing\Events;

class RouteMatched
{
    /**
     * The route instance.
     *
     * @var \Hlx\Routing\Route
     */
    public $route;

    /**
     * The request instance.
     *
     * @var \Hlx\Http\Request
     */
    public $request;

    /**
     * Create a new event instance.
     *
     * @param  \Hlx\Routing\Route  $route
     * @param  \Hlx\Http\Request  $request
     * @return void
     */
    public function __construct($route, $request)
    {
        $this->route = $route;
        $this->request = $request;
    }
}
