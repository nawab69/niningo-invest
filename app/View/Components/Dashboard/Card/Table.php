<?php

namespace App\View\Components\Dashboard\Card;

use App\Models\Transaction;
use Illuminate\View\Component;

class Table extends Component
{

    public $transactions;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->transactions = Transaction::latest()->paginate(5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.dashboard.card.table');
    }
}
