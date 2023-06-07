<?php

namespace Dainsys\Component\Exceptions;

use Exception;

class PresetNotFoundException extends Exception
{
    /**
     * @param string $preset
     */
    public function __construct(string $preset)
    {
        $availablePresets = config('component.presets');

        $message = sprintf('Preset "%s" is not defined in the config?', $preset);
        if ([] !== $availablePresets) {
            $message .= sprintf(' Available presets: %s', implode(', ', $availablePresets));
        }

        parent::__construct($message);
    }
}
