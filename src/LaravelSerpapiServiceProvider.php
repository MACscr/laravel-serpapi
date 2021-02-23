<?php

declare(strict_types=1);

namespace Tipoff\LaravelSerpapi;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class LaravelSerpapiServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('laravel-serpapi')
            ->hasViews()
            ->hasConfigFile();
    }
}
