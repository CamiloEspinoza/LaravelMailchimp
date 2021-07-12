<?php

namespace Laravelmailchimp\Laravelmailchimp;

use Laravelmailchimp\Laravelmailchimp\Commands\LaravelmailchimpCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelmailchimpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelmailchimp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelmailchimp_table')
            ->hasCommand(LaravelmailchimpCommand::class);
    }
}
