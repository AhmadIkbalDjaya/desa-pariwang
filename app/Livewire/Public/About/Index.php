<?php

namespace App\Livewire\Public\About;

use App\Models\VillageAparatus;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.about.index', [
            "village_aparatus" => VillageAparatus::all(),
        ])->title("Tentang Desa");
    }
}
