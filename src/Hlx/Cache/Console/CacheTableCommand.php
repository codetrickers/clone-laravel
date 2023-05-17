<?php

namespace Hlx\Cache\Console;

use Hlx\Console\Command;
use Hlx\Filesystem\Filesystem;
use Hlx\Support\Composer;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'cache:table')]
class CacheTableCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cache:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the cache database table';

    /**
     * The filesystem instance.
     *
     * @var \Hlx\Filesystem\Filesystem
     */
    protected $files;

    /**
     * @var \Hlx\Support\Composer
     *
     * @deprecated Will be removed in a future Hlx version.
     */
    protected $composer;

    /**
     * Create a new cache table command instance.
     *
     * @param  \Hlx\Filesystem\Filesystem  $files
     * @param  \Hlx\Support\Composer  $composer
     * @return void
     */
    public function __construct(Filesystem $files, Composer $composer)
    {
        parent::__construct();

        $this->files = $files;
        $this->composer = $composer;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $fullPath = $this->createBaseMigration();

        $this->files->put($fullPath, $this->files->get(__DIR__.'/stubs/cache.stub'));

        $this->components->info('Migration created successfully.');
    }

    /**
     * Create a base migration file for the table.
     *
     * @return string
     */
    protected function createBaseMigration()
    {
        $name = 'create_cache_table';

        $path = $this->hlx->databasePath().'/migrations';

        return $this->hlx['migration.creator']->create($name, $path);
    }
}
