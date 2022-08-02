<?php

namespace Pboivin\Flou\Laravel\Tests;

use Illuminate\Support\Facades\File;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Pboivin\Flou\Laravel\ServiceProvider;

class TestCase extends BaseTestCase
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
    }

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->cleanDirectories();

        $this->afterSetup();
    }

    protected function afterSetup()
    {
    }

    protected function cleanDirectories()
    {
        File::cleanDirectory(public_path('images'));
    }

    protected function copy($filesMap)
    {
        foreach ($filesMap as $source => $destination) {
            $sourcePath = __DIR__ . '/fixtures/' . $source;

            File::ensureDirectoryExists(dirname($destination));

            if (File::isDirectory($sourcePath)) {
                File::copyDirectory($sourcePath, $destination);
            } else {
                File::copy($sourcePath, $destination);
            }
        }
    }
}
