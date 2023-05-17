<?php

namespace Hlx\Support;

class DefaultProviders
{
    /**
     * The current providers.
     *
     * @var array
     */
    protected $providers;

    /**
     * Create a new default provider collection.
     *
     * @return void
     */
    public function __construct(?array $providers = null)
    {
        $this->providers = $providers ?: [
            \Hlx\Auth\AuthServiceProvider::class,
            \Hlx\Broadcasting\BroadcastServiceProvider::class,
            \Hlx\Bus\BusServiceProvider::class,
            \Hlx\Cache\CacheServiceProvider::class,
            \Hlx\Foundation\Providers\ConsoleSupportServiceProvider::class,
            \Hlx\Cookie\CookieServiceProvider::class,
            \Hlx\Database\DatabaseServiceProvider::class,
            \Hlx\Encryption\EncryptionServiceProvider::class,
            \Hlx\Filesystem\FilesystemServiceProvider::class,
            \Hlx\Foundation\Providers\FoundationServiceProvider::class,
            \Hlx\Hashing\HashServiceProvider::class,
            \Hlx\Mail\MailServiceProvider::class,
            \Hlx\Notifications\NotificationServiceProvider::class,
            \Hlx\Pagination\PaginationServiceProvider::class,
            \Hlx\Pipeline\PipelineServiceProvider::class,
            \Hlx\Queue\QueueServiceProvider::class,
            \Hlx\Redis\RedisServiceProvider::class,
            \Hlx\Auth\Passwords\PasswordResetServiceProvider::class,
            \Hlx\Session\SessionServiceProvider::class,
            \Hlx\Translation\TranslationServiceProvider::class,
            \Hlx\Validation\ValidationServiceProvider::class,
            \Hlx\View\ViewServiceProvider::class,
        ];
    }

    /**
     * Merge the given providers into the provider collection.
     *
     * @param  array  $providers
     * @return static
     */
    public function merge(array $providers)
    {
        $this->providers = array_merge($this->providers, $providers);

        return new static($this->providers);
    }

    /**
     * Replace the given providers with other providers.
     *
     * @param  array  $items
     * @return static
     */
    public function replace(array $replacements)
    {
        $current = collect($this->providers);

        foreach ($replacements as $from => $to) {
            $key = $current->search($from);

            $current = $key ? $current->replace([$key => $to]) : $current;
        }

        return new static($current->values()->toArray());
    }

    /**
     * Disable the given providers.
     *
     * @param  array  $providers
     * @return static
     */
    public function except(array $providers)
    {
        return new static(collect($this->providers)
                ->reject(fn ($p) => in_array($p, $providers))
                ->values()
                ->toArray());
    }

    /**
     * Convert the provider collection to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->providers;
    }
}
