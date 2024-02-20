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
            "profile" => Profile::get()->first(),
            "location" => Location::get()->first(),
        ]);
    }
}
