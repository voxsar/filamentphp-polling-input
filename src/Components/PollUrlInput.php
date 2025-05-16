<?php

namespace Voxsar\PollUrlInput\Components;

use Filament\Forms\Components\Field;

class PollUrlInput extends Field
{
    protected string $view = 'poll-url-input::components.poll-url-input';

    public string $pollUrl = '';
    public int $pollInterval = 5000;

    public function pollFrom(string $url): static
    {
        $this->pollUrl = $url;
        return $this;
    }

    public function interval(int $ms): static
    {
        $this->pollInterval = $ms;
        return $this;
    }

    public function getPollUrl(): string
    {
        return $this->pollUrl;
    }

    public function getPollInterval(): int
    {
        return $this->pollInterval;
    }
}
