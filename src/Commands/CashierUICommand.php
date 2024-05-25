<?php

namespace LivGhit\CashierUI\Commands;

use Illuminate\Console\Command;

class CashierUICommand extends Command
{
    public $signature = 'cashierui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
