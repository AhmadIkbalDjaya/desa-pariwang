<?php

namespace App\Livewire\Public\About;

use App\Models\Hamlet;
use App\Models\Location;
use App\Models\Marker;
use App\Models\Profile;
use App\Models\VillageAparatus;
use App\Models\VisionMission;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.about.index', [
            "hamlets" => Hamlet::select("id", "name")->get(),
            "profile" => Profile::select("id", "name", "description", "potency", "village_status_id")->with(['village_status:id,name'])->first(),
            "location" => Location::select("id", "province", "regency", "district", "latitude", "longitude", "border_north", "border_east", "border_south", "border_west", "area")->first(),
            "village_aparatus" => VillageAparatus::select("id", "name", "position", "photo", "gender")->get(),
            "visi" => VisionMission::select("id", "content")->where('is_visi', 1)->get()->first(),
            "mision" => VisionMission::select("id", "content")->where('is_visi', 0)->get(),
            "markers" => Marker::select(["id", "name", "longitude", "latitude", "image", "description"])->get(),
        ])->title("Tentang Desa");
    }
}
