<?php

namespace App\Livewire\Public\Institution;

use App\Models\Institution;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $institutions = Cache::rememberForever("institution-institutions", function () {
            return Institution::select("id", "name", "abbreviation")
                ->with(["members:id,institution_id,name,position,gender,photo"])
                ->latest()->get();
        });
        return view('livewire.public.institution.index', [
            "institutions" => $institutions,
        ])->title("Kelembagaan");
    }
}
