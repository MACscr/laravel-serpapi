<?php

declare(strict_types=1);

namespace Tipoff\LaravelSerpapi\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Tipoff\LaravelSerpapi\LaravelSerpapiServiceProvider;
use Tipoff\LaravelSerpapi\Tests\Support\Providers\NovaTestbenchServiceProvider;
use Tipoff\Locations\LocationsServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaTestbenchServiceProvider::class,
            LaravelSerpapiServiceProvider::class,
            SupportServiceProvider::class,
            LocationsServiceProvider::class,
        ];
    }
}