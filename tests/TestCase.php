<?php

namespace Laravelmailchimp\Laravelmailchimp\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Laravelmailchimp\Laravelmailchimp\LaravelmailchimpServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Laravelmailchimp\\Laravelmailchimp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelmailchimpServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravelmailchimp_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
