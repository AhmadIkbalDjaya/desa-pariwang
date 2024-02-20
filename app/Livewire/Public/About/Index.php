<?php

namespace App\Livewire\Public\About;

use App\Models\Profile;
use App\Models\VillageAparatus;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.about.index', [
            "profile" => Profile::get()->first(),
            "village_aparatus" => VillageAparatus::all(),
        ])->title("Tentang Desa");
    }
}
