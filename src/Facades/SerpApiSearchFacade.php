<?php

namespace Macscr\LaravelSerpapi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Google_Search
 */
class SerpApiSearchFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'serp-api-search';
    }
}
