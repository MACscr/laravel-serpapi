<?php

namespace Tipoff\LaravelSerpapi\Helpers;

use Tipoff\LaravelSerpapi\Helpers\SerpApiSearch;
use Tipoff\LaravelSerpapi\Exceptions\SerpApiSearchException;

/* * *
 * YouTube search
 */

class YouTubeSearch extends SerpApiSearch {

    public function __construct($api_key = NULL) {
        parent::__construct($api_key, 'youTube');
    }

    /*     * *
     * Method is not supported.
     */

    public function get_location($q, $limit) {
        throw new SerpApiSearchException("location is not currently supported by Bing");
    }

}
