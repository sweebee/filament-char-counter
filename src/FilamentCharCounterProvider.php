<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentCharCounterProvider extends PluginServiceProvider
{
    public static string $name = 'filament-char-counter';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews();
    }
}
