<?php

namespace Dainsys\Component;

use Dainsys\Component\Exceptions\PresetNotFoundException;

class Component
{
    public static function setPreset(string $preset)
    {
        if (!in_array($preset, config('component.presets'))) {
            throw new PresetNotFoundException($preset);
        }

        config()->set('component.preset', $preset);
    }
}
