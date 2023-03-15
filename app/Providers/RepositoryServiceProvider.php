<?php

namespace App\Providers;

use App\Services\Impl\MobileUnitScheduleServiceImpl;
use App\Services\Impl\StockServiceImpl;
use App\Services\MobileUnitScheduleService;
use App\Services\StockService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array $singletons = [
        StockService::class => StockServiceImpl::class,
        MobileUnitScheduleService::class => MobileUnitScheduleServiceImpl::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function provides(): array
    {
        return [
            StockService::class,
            MobileUnitScheduleService::class,
        ];
    }
}
