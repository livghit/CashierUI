<?php

namespace LivGhit\CashierUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LivGhit\CashierUI\Commands\CashierUICommand;

class CashierUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https//github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cashierui')
            ->hasConfigFile()
            ->hasViews()
            ->hasRoutes('cashierui')
            ->hasMigration('create_cashierui_table')
            ->hasCommand(CashierUICommand::class);
    }
}
