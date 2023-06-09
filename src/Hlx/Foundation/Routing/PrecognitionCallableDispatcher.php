<?php

namespace Hlx\Foundation\Routing;

use Hlx\Routing\CallableDispatcher;
use Hlx\Routing\Route;

class PrecognitionCallableDispatcher extends CallableDispatcher
{
    /**
     * Dispatch a request to a given callable.
     *
     * @param  \Hlx\Routing\Route  $route
     * @param  callable  $callable
     * @return mixed
     */
    public function dispatch(Route $route, $callable)
    {
        $this->resolveParameters($route, $callable);

        abort(204, headers: ['Precognition-Success' => 'true']);
    }
}
