<?php

namespace Hlx\Support\Facades;

use Hlx\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @method static void routes(array|null $attributes = null)
 * @method static void userRoutes(array|null $attributes = null)
 * @method static void channelRoutes(array|null $attributes = null)
 * @method static string|null socket(\Hlx\Http\Request|null $request = null)
 * @method static \Hlx\Broadcasting\PendingBroadcast event(mixed|null $event = null)
 * @method static void queue(mixed $event)
 * @method static mixed connection(string|null $driver = null)
 * @method static mixed driver(string|null $name = null)
 * @method static \Pusher\Pusher pusher(array $config)
 * @method static \Ably\AblyRest ably(array $config)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static void purge(string|null $name = null)
 * @method static \Hlx\Broadcasting\BroadcastManager extend(string $driver, \Closure $callback)
 * @method static \Hlx\Contracts\Foundation\Application getApplication()
 * @method static \Hlx\Broadcasting\BroadcastManager setApplication(\Hlx\Contracts\Foundation\Application $app)
 * @method static \Hlx\Broadcasting\BroadcastManager forgetDrivers()
 * @method static mixed auth(\Hlx\Http\Request $request)
 * @method static mixed validAuthenticationResponse(\Hlx\Http\Request $request, mixed $result)
 * @method static void broadcast(array $channels, string $event, array $payload = [])
 * @method static array|null resolveAuthenticatedUser(\Hlx\Http\Request $request)
 * @method static void resolveAuthenticatedUserUsing(\Closure $callback)
 * @method static \Hlx\Broadcasting\Broadcasters\Broadcaster channel(\Hlx\Contracts\Broadcasting\HasBroadcastChannel|string $channel, callable|string $callback, array $options = [])
 * @method static \Hlx\Support\Collection getChannels()
 *
 * @see \Hlx\Broadcasting\BroadcastManager
 * @see \Hlx\Broadcasting\Broadcasters\Broadcaster
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
