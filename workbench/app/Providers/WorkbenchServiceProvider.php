<?php

namespace Workbench\App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use LivGhit\CashierUI\CashierUIServiceProvider;

class WorkbenchServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        CashierUIServiceProvider::class;
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::view('/', 'welcome');
    }
}
