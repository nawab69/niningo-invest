<?php

namespace App\View\Components\Dashboard\Card;

use Illuminate\View\Component;

class Fund extends Component
{

    public $fund;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fund = auth()->user()->fund;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.card.fund');
    }
}
