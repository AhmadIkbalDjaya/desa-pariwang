<?php

namespace App\Livewire\Public\Institution;

use App\Models\Institution;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.institution.index', [
            "institutions" => Institution::latest()->get(),
        ])->title("Kelembagaan");
    }
}
