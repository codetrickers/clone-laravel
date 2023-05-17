<?php

namespace Hlx\Routing\Controllers;

interface HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     *
     * @return \Hlx\Routing\Controllers\Middleware|array
     */
    public static function middleware();
}
