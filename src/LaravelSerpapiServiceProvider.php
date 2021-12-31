<?php

declare(strict_types=1);

namespace Macscr\LaravelSerpapi;

use Illuminate\Support\ServiceProvider;
use Macscr\LaravelSerpapi\Helpers\SerpApiSearch;

class LaravelSerpapiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-serpapi.php' => config_path('laravel-serpapi.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-serpapi.php',
            'laravel-serpapi'
        );

        $this->app->bind(SerpApiSearch::class, function () {
            $api_key = config('laravel-serpapi.api_key');
            $engine = config('laravel-serpapi.search_engine');

            return new SerpApiSearch($api_key, $engine);
        });
    }
}
