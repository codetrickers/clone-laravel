<?php

namespace Hlx\Support\Facades;

use Closure;
use Hlx\Process\Factory;

/**
 * @method static \Hlx\Process\PendingProcess command(array|string $command)
 * @method static \Hlx\Process\PendingProcess path(string $path)
 * @method static \Hlx\Process\PendingProcess timeout(int $timeout)
 * @method static \Hlx\Process\PendingProcess idleTimeout(int $timeout)
 * @method static \Hlx\Process\PendingProcess forever()
 * @method static \Hlx\Process\PendingProcess env(array $environment)
 * @method static \Hlx\Process\PendingProcess input(\Traversable|resource|string|int|float|bool|null $input)
 * @method static \Hlx\Process\PendingProcess quietly()
 * @method static \Hlx\Process\PendingProcess tty(bool $tty = true)
 * @method static \Hlx\Process\PendingProcess options(array $options)
 * @method static \Hlx\Contracts\Process\ProcessResult run(array|string|null $command = null, callable|null $output = null)
 * @method static \Hlx\Process\InvokedProcess start(array|string|null $command = null, callable $output = null)
 * @method static \Hlx\Process\PendingProcess withFakeHandlers(array $fakeHandlers)
 * @method static \Hlx\Process\PendingProcess|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \Hlx\Process\PendingProcess|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \Hlx\Process\FakeProcessResult result(array|string $output = '', array|string $errorOutput = '', int $exitCode = 0)
 * @method static \Hlx\Process\FakeProcessDescription describe()
 * @method static \Hlx\Process\FakeProcessSequence sequence(array $processes = [])
 * @method static bool isRecording()
 * @method static \Hlx\Process\Factory recordIfRecording(\Hlx\Process\PendingProcess $process, \Hlx\Contracts\Process\ProcessResult $result)
 * @method static \Hlx\Process\Factory record(\Hlx\Process\PendingProcess $process, \Hlx\Contracts\Process\ProcessResult $result)
 * @method static \Hlx\Process\Factory preventStrayProcesses(bool $prevent = true)
 * @method static bool preventingStrayProcesses()
 * @method static \Hlx\Process\Factory assertRan(\Closure|string $callback)
 * @method static \Hlx\Process\Factory assertRanTimes(\Closure|string $callback, int $times = 1)
 * @method static \Hlx\Process\Factory assertNotRan(\Closure|string $callback)
 * @method static \Hlx\Process\Factory assertDidntRun(\Closure|string $callback)
 * @method static \Hlx\Process\Factory assertNothingRan()
 * @method static \Hlx\Process\Pool pool(callable $callback)
 * @method static \Hlx\Contracts\Process\ProcessResult pipe(callable|array $callback, callable|null $output = null)
 * @method static \Hlx\Process\ProcessPoolResults concurrently(callable $callback, callable|null $output = null)
 * @method static \Hlx\Process\PendingProcess newPendingProcess()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 *
 * @see \Hlx\Process\PendingProcess
 * @see \Hlx\Process\Factory
 */
class Process extends Facade
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
     * Indicate that the process factory should fake processes.
     *
     * @param  \Closure|array|null  $callback
     * @return \Hlx\Process\Factory
     */
    public static function fake(Closure|array $callback = null)
    {
        return tap(static::getFacadeRoot(), function ($fake) use ($callback) {
            static::swap($fake->fake($callback));
        });
    }
}
