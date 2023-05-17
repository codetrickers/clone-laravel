<?php

namespace Hlx\Support\Facades;

use Hlx\Http\Client\Factory;

/**
 * @method static \GuzzleHttp\Promise\PromiseInterface response(array|string|null $body = null, int $status = 200, array $headers = [])
 * @method static \Hlx\Http\Client\ResponseSequence sequence(array $responses = [])
 * @method static \Hlx\Http\Client\Factory allowStrayRequests()
 * @method static void recordRequestResponsePair(\Hlx\Http\Client\Request $request, \Hlx\Http\Client\Response $response)
 * @method static void assertSent(callable $callback)
 * @method static void assertSentInOrder(array $callbacks)
 * @method static void assertNotSent(callable $callback)
 * @method static void assertNothingSent()
 * @method static void assertSentCount(int $count)
 * @method static void assertSequencesAreEmpty()
 * @method static \Hlx\Support\Collection recorded(callable $callback = null)
 * @method static \Hlx\Contracts\Events\Dispatcher|null getDispatcher()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static \Hlx\Http\Client\PendingRequest baseUrl(string $url)
 * @method static \Hlx\Http\Client\PendingRequest withBody(string $content, string $contentType = 'application/json')
 * @method static \Hlx\Http\Client\PendingRequest asJson()
 * @method static \Hlx\Http\Client\PendingRequest asForm()
 * @method static \Hlx\Http\Client\PendingRequest attach(string|array $name, string|resource $contents = '', string|null $filename = null, array $headers = [])
 * @method static \Hlx\Http\Client\PendingRequest asMultipart()
 * @method static \Hlx\Http\Client\PendingRequest bodyFormat(string $format)
 * @method static \Hlx\Http\Client\PendingRequest contentType(string $contentType)
 * @method static \Hlx\Http\Client\PendingRequest acceptJson()
 * @method static \Hlx\Http\Client\PendingRequest accept(string $contentType)
 * @method static \Hlx\Http\Client\PendingRequest withHeaders(array $headers)
 * @method static \Hlx\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
 * @method static \Hlx\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
 * @method static \Hlx\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
 * @method static \Hlx\Http\Client\PendingRequest withUserAgent(string|bool $userAgent)
 * @method static \Hlx\Http\Client\PendingRequest withUrlParameters(array $parameters = [])
 * @method static \Hlx\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
 * @method static \Hlx\Http\Client\PendingRequest maxRedirects(int $max)
 * @method static \Hlx\Http\Client\PendingRequest withoutRedirecting()
 * @method static \Hlx\Http\Client\PendingRequest withoutVerifying()
 * @method static \Hlx\Http\Client\PendingRequest sink(string|resource $to)
 * @method static \Hlx\Http\Client\PendingRequest timeout(int $seconds)
 * @method static \Hlx\Http\Client\PendingRequest connectTimeout(int $seconds)
 * @method static \Hlx\Http\Client\PendingRequest retry(int $times, Closure|int $sleepMilliseconds = 0, callable|null $when = null, bool $throw = true)
 * @method static \Hlx\Http\Client\PendingRequest withOptions(array $options)
 * @method static \Hlx\Http\Client\PendingRequest withMiddleware(callable $middleware)
 * @method static \Hlx\Http\Client\PendingRequest beforeSending(callable $callback)
 * @method static \Hlx\Http\Client\PendingRequest throw(callable|null $callback = null)
 * @method static \Hlx\Http\Client\PendingRequest throwIf(callable|bool $condition, callable|null $throwCallback = null)
 * @method static \Hlx\Http\Client\PendingRequest throwUnless(bool $condition)
 * @method static \Hlx\Http\Client\PendingRequest dump()
 * @method static \Hlx\Http\Client\PendingRequest dd()
 * @method static \Hlx\Http\Client\Response get(string $url, array|string|null $query = null)
 * @method static \Hlx\Http\Client\Response head(string $url, array|string|null $query = null)
 * @method static \Hlx\Http\Client\Response post(string $url, array $data = [])
 * @method static \Hlx\Http\Client\Response patch(string $url, array $data = [])
 * @method static \Hlx\Http\Client\Response put(string $url, array $data = [])
 * @method static \Hlx\Http\Client\Response delete(string $url, array $data = [])
 * @method static array pool(callable $callback)
 * @method static \Hlx\Http\Client\Response send(string $method, string $url, array $options = [])
 * @method static \GuzzleHttp\Client buildClient()
 * @method static \GuzzleHttp\Client createClient(\GuzzleHttp\HandlerStack $handlerStack)
 * @method static \GuzzleHttp\HandlerStack buildHandlerStack()
 * @method static \GuzzleHttp\HandlerStack pushHandlers(\GuzzleHttp\HandlerStack $handlerStack)
 * @method static \Closure buildBeforeSendingHandler()
 * @method static \Closure buildRecorderHandler()
 * @method static \Closure buildStubHandler()
 * @method static \GuzzleHttp\Psr7\RequestInterface runBeforeSendingCallbacks(\GuzzleHttp\Psr7\RequestInterface $request, array $options)
 * @method static array mergeOptions(array ...$options)
 * @method static \Hlx\Http\Client\PendingRequest stub(callable $callback)
 * @method static \Hlx\Http\Client\PendingRequest async(bool $async = true)
 * @method static \GuzzleHttp\Promise\PromiseInterface|null getPromise()
 * @method static \Hlx\Http\Client\PendingRequest setClient(\GuzzleHttp\Client $client)
 * @method static \Hlx\Http\Client\PendingRequest setHandler(callable $handler)
 * @method static array getOptions()
 * @method static \Hlx\Http\Client\PendingRequest|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \Hlx\Http\Client\PendingRequest|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 *
 * @see \Hlx\Http\Client\Factory
 */
class Http extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }

    /**
     * Register a stub callable that will intercept requests and be able to return stub responses.
     *
     * @param  \Closure|array  $callback
     * @return \Hlx\Http\Client\Factory
     */
    public static function fake($callback = null)
    {
        return tap(static::getFacadeRoot(), function ($fake) use ($callback) {
            static::swap($fake->fake($callback));
        });
    }

    /**
     * Register a response sequence for the given URL pattern.
     *
     * @param  string  $urlPattern
     * @return \Hlx\Http\Client\ResponseSequence
     */
    public static function fakeSequence(string $urlPattern = '*')
    {
        $fake = tap(static::getFacadeRoot(), function ($fake) {
            static::swap($fake);
        });

        return $fake->fakeSequence($urlPattern);
    }

    /**
     * Indicate that an exception should be thrown if any request is not faked.
     *
     * @return \Hlx\Http\Client\Factory
     */
    public static function preventStrayRequests()
    {
        return tap(static::getFacadeRoot(), function ($fake) {
            static::swap($fake->preventStrayRequests());
        });
    }

    /**
     * Stub the given URL using the given callback.
     *
     * @param  string  $url
     * @param  \Hlx\Http\Client\Response|\GuzzleHttp\Promise\PromiseInterface|callable  $callback
     * @return \Hlx\Http\Client\Factory
     */
    public static function stubUrl($url, $callback)
    {
        return tap(static::getFacadeRoot(), function ($fake) use ($url, $callback) {
            static::swap($fake->stubUrl($url, $callback));
        });
    }
}
