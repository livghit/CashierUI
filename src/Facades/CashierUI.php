<?php

namespace LivGhit\CashierUI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LivGhit\CashierUI\CashierUI
 */
class CashierUI extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LivGhit\CashierUI\CashierUI::class;
    }
}
