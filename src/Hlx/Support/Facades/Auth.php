<?php

namespace Hlx\Support\Facades;

use Hlx\Ui\UiServiceProvider;
use RuntimeException;

/**
 * @method static \Hlx\Contracts\Auth\Guard|\Hlx\Contracts\Auth\StatefulGuard guard(string|null $name = null)
 * @method static \Hlx\Auth\SessionGuard createSessionDriver(string $name, array $config)
 * @method static \Hlx\Auth\TokenGuard createTokenDriver(string $name, array $config)
 * @method static string getDefaultDriver()
 * @method static void shouldUse(string $name)
 * @method static void setDefaultDriver(string $name)
 * @method static \Hlx\Auth\AuthManager viaRequest(string $driver, callable $callback)
 * @method static \Closure userResolver()
 * @method static \Hlx\Auth\AuthManager resolveUsersUsing(\Closure $userResolver)
 * @method static \Hlx\Auth\AuthManager extend(string $driver, \Closure $callback)
 * @method static \Hlx\Auth\AuthManager provider(string $name, \Closure $callback)
 * @method static bool hasResolvedGuards()
 * @method static \Hlx\Auth\AuthManager forgetGuards()
 * @method static \Hlx\Auth\AuthManager setApplication(\Hlx\Contracts\Foundation\Application $app)
 * @method static \Hlx\Contracts\Auth\UserProvider|null createUserProvider(string|null $provider = null)
 * @method static string getDefaultUserProvider()
 * @method static bool check()
 * @method static bool guest()
 * @method static \Hlx\Contracts\Auth\Authenticatable|null user()
 * @method static int|string|null id()
 * @method static bool validate(array $credentials = [])
 * @method static bool hasUser()
 * @method static void setUser(\Hlx\Contracts\Auth\Authenticatable $user)
 * @method static bool attempt(array $credentials = [], bool $remember = false)
 * @method static bool once(array $credentials = [])
 * @method static void login(\Hlx\Contracts\Auth\Authenticatable $user, bool $remember = false)
 * @method static \Hlx\Contracts\Auth\Authenticatable|bool loginUsingId(mixed $id, bool $remember = false)
 * @method static \Hlx\Contracts\Auth\Authenticatable|bool onceUsingId(mixed $id)
 * @method static bool viaRemember()
 * @method static void logout()
 * @method static \Symfony\Component\HttpFoundation\Response|null basic(string $field = 'email', array $extraConditions = [])
 * @method static \Symfony\Component\HttpFoundation\Response|null onceBasic(string $field = 'email', array $extraConditions = [])
 * @method static bool attemptWhen(array $credentials = [], array|callable|null $callbacks = null, bool $remember = false)
 * @method static void logoutCurrentDevice()
 * @method static \Hlx\Contracts\Auth\Authenticatable|null logoutOtherDevices(string $password, string $attribute = 'password')
 * @method static void attempting(mixed $callback)
 * @method static \Hlx\Contracts\Auth\Authenticatable getLastAttempted()
 * @method static string getName()
 * @method static string getRecallerName()
 * @method static \Hlx\Auth\SessionGuard setRememberDuration(int $minutes)
 * @method static \Hlx\Contracts\Cookie\QueueingFactory getCookieJar()
 * @method static void setCookieJar(\Hlx\Contracts\Cookie\QueueingFactory $cookie)
 * @method static \Hlx\Contracts\Events\Dispatcher getDispatcher()
 * @method static void setDispatcher(\Hlx\Contracts\Events\Dispatcher $events)
 * @method static \Hlx\Contracts\Session\Session getSession()
 * @method static \Hlx\Contracts\Auth\Authenticatable|null getUser()
 * @method static \Symfony\Component\HttpFoundation\Request getRequest()
 * @method static \Hlx\Auth\SessionGuard setRequest(\Symfony\Component\HttpFoundation\Request $request)
 * @method static \Hlx\Support\Timebox getTimebox()
 * @method static \Hlx\Contracts\Auth\Authenticatable authenticate()
 * @method static \Hlx\Auth\SessionGuard forgetUser()
 * @method static \Hlx\Contracts\Auth\UserProvider getProvider()
 * @method static void setProvider(\Hlx\Contracts\Auth\UserProvider $provider)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see \Hlx\Auth\AuthManager
 * @see \Hlx\Auth\SessionGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     *
     * @throws \RuntimeException
     */
    public static function routes(array $options = [])
    {
        if (! static::$app->providerIsLoaded(UiServiceProvider::class)) {
            throw new RuntimeException('In order to use the Auth::routes() method, please install the hlx/ui package.');
        }

        static::$app->make('router')->auth($options);
    }
}
