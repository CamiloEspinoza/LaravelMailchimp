<?php

namespace Laravelmailchimp\Laravelmailchimp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Laravelmailchimp\Laravelmailchimp\Commands\LaravelmailchimpCommand;

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
            ->hasCommand(LaravelmailchimpCommand::class);
    }
}
