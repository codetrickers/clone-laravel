<?php

namespace Hlx\Session\Console;

use Hlx\Console\Command;
use Hlx\Filesystem\Filesystem;
use Hlx\Support\Composer;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'session:table')]
class SessionTableCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'session:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the session database table';

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
     * Create a new session table command instance.
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

        $this->files->put($fullPath, $this->files->get(__DIR__.'/stubs/database.stub'));

        $this->components->info('Migration created successfully.');
    }

    /**
     * Create a base migration file for the session.
     *
     * @return string
     */
    protected function createBaseMigration()
    {
        $name = 'create_sessions_table';

        $path = $this->hlx->databasePath().'/migrations';

        return $this->hlx['migration.creator']->create($name, $path);
    }
}
