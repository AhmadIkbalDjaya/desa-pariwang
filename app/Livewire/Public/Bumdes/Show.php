<?php

namespace App\Livewire\Public\Bumdes;

use App\Models\Bumdes;
use Livewire\Component;

class Show extends Component
{
    public Bumdes $bumdes;
    public function render()
    {
        return view('livewire.public.bumdes.show');
    }
}
