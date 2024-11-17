<?php

namespace App\Livewire\Public\Components;

use App\Models\Location;
use App\Models\Profile;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.public.components.footer', [
            "profile" => Profile::select(["id", "name", "contact", "email"])->first(),
            "location" => Location::select("id", "district", "regency")->first(),
        ]);
    }
}
