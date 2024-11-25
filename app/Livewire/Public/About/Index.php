<?php

namespace App\Livewire\Public\About;

use App\Models\Hamlet;
use App\Models\Location;
use App\Models\Marker;
use App\Models\Marker;
use App\Models\Profile;
use App\Models\VillageAparatus;
use App\Models\VisionMission;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $hamlets = Cache::rememberForever('about-hamlets', function () {
            return Hamlet::select("id", "name")->get();
        });
        $profile = Cache::rememberForever("about-profile", function () {
            return Profile::select("id", "name", "description", "potency", "village_status_id")
                ->with(['village_status:id,name'])
                ->first();
        });
        $location = Cache::rememberForever("about-location", function () {
            return Location::select("id", "province", "regency", "district", "latitude", "longitude", "border_north", "border_east", "border_south", "border_west", "area")
                ->first();
        });
        $village_aparatus = Cache::rememberForever('about-village_aparatus', function () {
            return VillageAparatus::select("id", "name", "position", "photo", "gender")->get();
        });
        $markers = Cache::rememberForever("about-markers", function () {
            return Marker::select(["id", "name", "longitude", "latitude", "image", "description"])->get();
        });

        return view('livewire.public.about.index', [
            "hamlets" => $hamlets,
            "profile" => $profile,
            "location" => $location,
            "village_aparatus" => $village_aparatus,
            "visi" => VisionMission::select("id", "content")->where('is_visi', 1)->get()->first(),
            "mision" => VisionMission::select("id", "content")->where('is_visi', 0)->get(),
            "markers" => $markers,
        ])->title("Tentang Desa");
    }
}
