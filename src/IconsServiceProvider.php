<?php

namespace Icons;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    public function provides() : array
    {
        return [
            Console\InstallCommand::class
        ];
    }
}
