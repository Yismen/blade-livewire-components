<?php

namespace Dainsys\Component\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Load the command service provider.
     *
     * @param  \Illuminate\Foundationlication $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Dainsys\Component\ComponentServiceProvider::class,
        ];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
