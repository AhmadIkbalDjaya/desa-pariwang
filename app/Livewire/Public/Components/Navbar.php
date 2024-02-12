<?php

namespace App\Livewire\Public\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.public.components.navbar');
    }
}
