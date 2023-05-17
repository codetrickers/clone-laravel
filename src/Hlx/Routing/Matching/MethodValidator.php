<?php

namespace Hlx\Routing\Matching;

use Hlx\Http\Request;
use Hlx\Routing\Route;

class MethodValidator implements ValidatorInterface
{
    /**
     * Validate a given rule against a route and request.
     *
     * @param  \Hlx\Routing\Route  $route
     * @param  \Hlx\Http\Request  $request
     * @return bool
     */
    public function matches(Route $route, Request $request)
    {
        return in_array($request->getMethod(), $route->methods());
    }
}
