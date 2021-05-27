<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Profile extends Component
{

    public $user, $wallet;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = auth()->user();
        $this->wallet = $this->user->wallet ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.profile');
    }
}
