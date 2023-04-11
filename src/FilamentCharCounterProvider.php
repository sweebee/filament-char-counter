<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentCharCounterProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-char-counter' =>
            __DIR__ . '/../resources/dist/css/char-counter.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->hasAssets()
            ->name('filament-char-counter')
            ->hasViews();
    }
}
