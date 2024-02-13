<?php

namespace App\Livewire\Public\Bumdes;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.bumdes.index')->title("Badan Usaha Milik Desa");
    }
}
