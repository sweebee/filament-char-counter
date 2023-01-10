<?php

namespace Wiebenieuwenhuis\FilamentCharCounter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCharCounterProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-char-counter')
            ->hasViews();
    }
}
