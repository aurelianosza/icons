<?php

namespace Icons\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    protected string $signature = 'icons:install';

    protected string $description = 'Install Heroicons blade components.';

    public function handle() : void
    {
        
    }
}
