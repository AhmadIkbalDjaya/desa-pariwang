<?php

namespace App\Livewire\Public\About;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.about.index')->title("Tentang Desa");
    }
}
