<?php

namespace Dainsys\Component\Tests\Unit;

use Dainsys\Component\Component;
use Dainsys\Component\Tests\TestCase;
use Dainsys\Component\Exceptions\PresetNotFoundException;

class ComponentTest extends TestCase
{
    /** @test */
    public function throw_exception_for_invalid_preset()
    {
        $this->expectException(PresetNotFoundException::class);

        Component::setPreset('invalid-preset');
    }

    /** @test */
    public function register_preset()
    {
        Component::setPreset('bootstrap-4');

        $this->assertEquals(config('component.preset'), 'bootstrap-4');
    }
}
