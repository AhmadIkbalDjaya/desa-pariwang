<?php

namespace App\Livewire\Public\Institution;

use App\Models\Institution;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.institution.index', [
            "institutions" => Institution::select("id", "name", "abbreviation")->with(["members:id,institution_id,name,position,gender,photo"])->latest()->get(),
        ])->title("Kelembagaan");
    }
}
