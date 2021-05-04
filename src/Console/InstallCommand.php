<?php

namespace Icons\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /** @var string */
    protected $signature = 'icons:install';

    /** @var string */
    protected $description = 'Install Heroicons blade components.';

    public function handle() : void
    {
        (new Filesystem)->ensureDirectoryExists(resource_path('views/components'));
        (new FileSystem)->copyDirectory(__DIR__.'/../../components', resource_path('views/components')); 
    }
}
