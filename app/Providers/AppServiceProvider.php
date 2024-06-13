<?php

namespace App\Providers;

use App\Services\AdminMobilService;
use Illuminate\Support\ServiceProvider;
use App\Services\Impl\AdminMobilServiceImpl;
use Illuminate\Contracts\Support\DeferrableProvider;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(AdminMobilService::class, AdminMobilServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    public function provides()
    {
        return [AdminMobilService::class];
    }
}
