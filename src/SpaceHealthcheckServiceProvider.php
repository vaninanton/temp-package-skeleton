<?php

namespace GoCPA\SpaceHealthcheck;

use GoCPA\SpaceHealthcheck\Commands\SpaceHealthcheckCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SpaceHealthcheckServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('space-healthcheck')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_space_healthcheck_table')
            ->hasCommand(SpaceHealthcheckCommand::class);
    }
}
