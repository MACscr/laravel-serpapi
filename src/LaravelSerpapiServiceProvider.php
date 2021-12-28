<?php

declare(strict_types=1);

namespace Tipoff\LaravelSerpapi;

use Tipoff\LaravelSerpapi\Helpers\SerpApiSearch;
use Illuminate\Support\ServiceProvider;

class LaravelSerpAPIServiceProvider extends ServiceProvider
{

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
