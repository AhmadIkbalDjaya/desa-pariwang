<?php

namespace App\Livewire\Public\About;

use App\Models\Hamlet;
use App\Models\Location;
use App\Models\Profile;
use App\Models\VillageAparatus;
use App\Models\VisionMission;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.about.index', [
            "hamlets" => Hamlet::all(),
            "profile" => Profile::get()->first(),
            "location" => Location::get()->first(),
            "village_aparatus" => VillageAparatus::all(),
            "visi" => VisionMission::where('is_visi', 1)->get()->first(),
            "mision" => VisionMission::where('is_visi', 0)->get(),
        ])->title("Tentang Desa");
    }
}
