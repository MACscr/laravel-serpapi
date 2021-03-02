<?php

namespace Tipoff\LaravelSerpapi\Helpers;

use Tipoff\LaravelSerpapi\Helpers\SerpApiSearch;
use Tipoff\LaravelSerpapi\Exceptions\SerpApiSearchException;

/* * *
 * Bing search
 */

class BingSearch extends SerpApiSearch {

    public function __construct($api_key = NULL) {
        parent::__construct($api_key, 'bing');
    }

}
