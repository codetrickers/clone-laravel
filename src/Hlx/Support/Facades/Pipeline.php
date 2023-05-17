<?php

namespace Hlx\Support\Facades;

/**
 * @method static \Hlx\Pipeline\Pipeline send(mixed $passable)
 * @method static \Hlx\Pipeline\Pipeline through(array|mixed $pipes)
 * @method static \Hlx\Pipeline\Pipeline pipe(array|mixed $pipes)
 * @method static \Hlx\Pipeline\Pipeline via(string $method)
 * @method static mixed then(\Closure $destination)
 * @method static mixed thenReturn()
 * @method static \Hlx\Pipeline\Pipeline setContainer(\Hlx\Contracts\Container\Container $container)
 *
 * @see \Hlx\Pipeline\Pipeline
 */
class Pipeline extends Facade
{
    /**
     * Indicates if the resolved instance should be cached.
     *
     * @var bool
     */
    protected static $cached = false;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pipeline';
    }
}
