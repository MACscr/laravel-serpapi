<?php

declare(strict_types=1);

namespace Macscr\LaravelSerpapi;

use Illuminate\Support\ServiceProvider;
use Macscr\LaravelSerpapi\Helpers\SerpApiSearch;

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
