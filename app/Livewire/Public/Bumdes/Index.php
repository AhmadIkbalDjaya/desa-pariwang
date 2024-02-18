<?php

namespace App\Livewire\Public\Bumdes;

use App\Models\Bumdes;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.bumdes.index', [
            'bumdeses' => Bumdes::latest()->get(),
        ])->title("Badan Usaha Milik Desa");
    }
}
