<?php

namespace Pleshkovpa\ToastsLivewire\Providers;

use Pleshkovpa\ToastsLivewire\Components\Toasts;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ToastsLivewireProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'toasts-livewire');

        $this->publishes(
            [__DIR__ . '/../../config/toasts-livewire.php' => config_path('toasts-livewire.php')],
            ['toasts-livewire', 'toasts-livewire:config']
        );

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/toasts-livewire')],
            ['toasts-livewire', 'toasts-livewire:views']
        );

        Livewire::component('toasts', Toasts::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/toasts-livewire.php', 'toasts-livewire');
    }
}
