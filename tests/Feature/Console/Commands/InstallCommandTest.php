<?php

namespace Dainsys\Component\Tests\Feature\Console\Commands;

use Dainsys\Component\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Dainsys\Component\Console\Commands\InstallCommand;

class InstallCommandTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function install_command_creates_files()
    {
        $this->artisan(InstallCommand::class)
            ->expectsConfirmation('Would you like to publish the component\'s configuration file?', 'yes')
            ->assertSuccessful();

        $this->assertFileExists(config_path('component.php'));
        $this->assertFileExists(resource_path('views/vendor/dainsys/component/layouts/app.blade.php'));
    }
}
