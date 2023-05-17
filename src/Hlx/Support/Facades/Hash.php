<?php

namespace Hlx\Support\Facades;

/**
 * @method static \Hlx\Hashing\BcryptHasher createBcryptDriver()
 * @method static \Hlx\Hashing\ArgonHasher createArgonDriver()
 * @method static \Hlx\Hashing\Argon2IdHasher createArgon2idDriver()
 * @method static array info(string $hashedValue)
 * @method static string make(string $value, array $options = [])
 * @method static bool check(string $value, string $hashedValue, array $options = [])
 * @method static bool needsRehash(string $hashedValue, array $options = [])
 * @method static string getDefaultDriver()
 * @method static mixed driver(string|null $driver = null)
 * @method static \Hlx\Hashing\HashManager extend(string $driver, \Closure $callback)
 * @method static array getDrivers()
 * @method static \Hlx\Contracts\Container\Container getContainer()
 * @method static \Hlx\Hashing\HashManager setContainer(\Hlx\Contracts\Container\Container $container)
 * @method static \Hlx\Hashing\HashManager forgetDrivers()
 *
 * @see \Hlx\Hashing\HashManager
 * @see \Hlx\Hashing\AbstractHasher
 */
class Hash extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash';
    }
}
