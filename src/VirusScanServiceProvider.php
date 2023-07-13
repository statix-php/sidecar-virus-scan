<?php

namespace Statix\VirusScan;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Statix\VirusScan\Commands\VirusScanCommand;

class VirusScanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('sidecar-virus-scan')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_sidecar-virus-scan_table')
            ->hasCommand(VirusScanCommand::class);
    }
}
