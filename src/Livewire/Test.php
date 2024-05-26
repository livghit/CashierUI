<?php

namespace LivGhit\CashierUI\Livewire;

use Illuminate\Support\Facades\View ;
use Livewire\Component;

class Test extends Component{
    public $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function render() {
        return View::make('cashierui::livewire.test');
    }
}
