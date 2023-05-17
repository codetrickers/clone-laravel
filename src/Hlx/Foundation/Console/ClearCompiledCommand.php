<?php

namespace Hlx\Foundation\Console;

use Hlx\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'clear-compiled')]
class ClearCompiledCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'clear-compiled';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the compiled class file';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (is_file($servicesPath = $this->hlx->getCachedServicesPath())) {
            @unlink($servicesPath);
        }

        if (is_file($packagesPath = $this->hlx->getCachedPackagesPath())) {
            @unlink($packagesPath);
        }

        $this->components->info('Compiled services and packages files removed successfully.');
    }
}
