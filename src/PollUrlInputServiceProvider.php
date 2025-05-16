<?php

namespace Vendor\PollUrlInput;

use Illuminate\Support\ServiceProvider;
use Filament\Forms\Components\Component;

class PollUrlInputServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'poll-url-input');

        Component::macro('pollUrlInput', function () {
            return \Vendor\PollUrlInput\Components\PollUrlInput::make($this->getName());
        });
    }
}
