 # Dainsys Component Tickets
 Blade components for laravel-livewire app and packages. 
 ### Installation
 1. Require using composer: `composer require dainsys/blade-livewire-components`.
 2. You can install all package assets by running `php artisan component:install` command or `@php artisan vendor:publish --force --tag=component:assets`.  
### Usage
1. Define the preset use in your application in the `boot` of your `AppServiceProvider`: `\Dainsys\Component\Component::setPreset('bootstrap-4')`. Other options are bootstrap-3, bootstrap-5 and tailwind.
   1.  Optionally, you may want to publish and tweek the config file: `@php artisan vendor:publish --force --tag=component:config` and define the preset there.
   2. Call the components: `<x-component::...`: You have access to the following components:
      1. `x-component::inputs.input-group`.
      2. `x-component::inputs.input`.
      3. `x-component::inputs.label`.
      4. `x-component::inputs.error`.
      5. `x-component::inputs.select`.
      6. `x-component::inputs.text-area`.
      7. `x-component::inputs.switch`.
      8. `x-component::inputs.switch-group`.
      9. `x-component::button`.
      10. `x-component::card`.
      11. `x-component::form`.
      12. `x-component::infographic`.
      13. `x-component::loading`.
      14. `x-component::modal`.
      15. `x-component::progressbar`.