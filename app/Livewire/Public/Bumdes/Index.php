<?php

namespace App\Livewire\Public\Bumdes;

use App\Models\Bumdes;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $bumdeses = Cache::rememberForever("bumdes-bumdeses", function () {
            return Bumdes::select("id", "name", "description", "image", "phone")
                ->latest()->get();
        });

        return view('livewire.public.bumdes.index', [
            'bumdeses' => $bumdeses,
        ])->title("Badan Usaha Milik Desa");
    }
}
