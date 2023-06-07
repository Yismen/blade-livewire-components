<?php

namespace Dainsys\Component;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

class ComponentServiceProvider extends AuthServiceProvider
{
    protected string $preset;

    public function boot()
    {
        $this->preset = config('component.preset');

        $this->bootPublishableAssets();
        $this->bootLoads();
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/component.php',
            'component'
        );
    }

    protected function bootPublishableAssets()
    {
        $this->publishes([
            __DIR__ . '/../config/component.php' => config_path('component.php')
        ], 'component:config');

        $this->publishes([
            __DIR__ . "/../resources/views/{$this->preset}/" => resource_path('views/vendor/component')
        ], 'component:views');
    }

    protected function bootLoads()
    {
        $this->loadViewsFrom(__DIR__ . "/../resources/views/{$this->preset}/", 'component');
    }
}
