<?php

namespace Tipoff\LaravelSerpapi\Helpers;

use Tipoff\LaravelSerpapi\Helpers\SerpApiSearch;
use Tipoff\LaravelSerpapi\Exceptions\SerpApiSearchException;

/* * *
 * Google search
 */

class GoogleSearch extends SerpApiSearch {

    public function __construct($api_key) {
        parent::__construct($api_key, 'google');
    }

}
