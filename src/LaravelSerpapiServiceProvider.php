<?php

declare(strict_types=1);

namespace Tipoff\LaravelSerpapi;

use SerpApiSearch;
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

    public function register()
    {
        parent::register();

        $this->app->bind(SerpApiSearch::class, function () {
            $api_key = config('laravel-serpapi.api_key');
            $engine = config('laravel-serpapi.search_engine');

            return new SerpApiSearch($api_key, $engine);
        });
    }
}
