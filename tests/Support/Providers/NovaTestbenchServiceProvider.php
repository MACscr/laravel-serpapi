<?php

declare(strict_types=1);

namespace Tipoff\LaravelSerpapi\Tests\Support\Providers;

use Tipoff\LaravelSerpapi\Nova\Competitor;
use Tipoff\LaravelSerpapi\Nova\Insight;
use Tipoff\LaravelSerpapi\Nova\Review;
use Tipoff\LaravelSerpapi\Nova\Snapshot;
use Tipoff\TestSupport\Providers\BaseNovaPackageServiceProvider;

class NovaTestbenchServiceProvider extends BaseNovaPackageServiceProvider
{
    public static array $packageResources = [
        Competitor::class,
        Insight::class,
        Review::class,
        Snapshot::class,
    ];
}
