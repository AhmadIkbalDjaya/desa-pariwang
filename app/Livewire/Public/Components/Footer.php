<?php

namespace App\Livewire\Public\Components;

use App\Models\Location;
use App\Models\Profile;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $profile = Cache::rememberForever("footer-profile", function () {
            return Profile::select(["id", "name", "contact", "email"])->first();
        });
        $location = Cache::rememberForever("footer-location", function () {
            return Location::select("id", "district", "regency")->first();
        });

        return view('livewire.public.components.footer', [
            "profile" => $profile,
            "location" => $location,
        ]);
    }
}
