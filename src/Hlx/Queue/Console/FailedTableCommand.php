<?php

namespace Hlx\Queue\Console;

use Hlx\Console\Command;
use Hlx\Filesystem\Filesystem;
use Hlx\Support\Composer;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:failed-table')]
class FailedTableCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'queue:failed-table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the failed queue jobs database table';

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
     * Create a new failed queue jobs table command instance.
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
        $table = $this->hlx['config']['queue.failed.table'];

        $this->replaceMigration(
            $this->createBaseMigration($table), $table
        );

        $this->components->info('Migration created successfully.');
    }

    /**
     * Create a base migration file for the table.
     *
     * @param  string  $table
     * @return string
     */
    protected function createBaseMigration($table = 'failed_jobs')
    {
        return $this->hlx['migration.creator']->create(
            'create_'.$table.'_table', $this->hlx->databasePath().'/migrations'
        );
    }

    /**
     * Replace the generated migration with the failed job table stub.
     *
     * @param  string  $path
     * @param  string  $table
     * @return void
     */
    protected function replaceMigration($path, $table)
    {
        $stub = str_replace(
            '{{table}}', $table, $this->files->get(__DIR__.'/stubs/failed_jobs.stub')
        );

        $this->files->put($path, $stub);
    }
}