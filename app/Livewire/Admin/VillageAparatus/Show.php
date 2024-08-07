<?php

namespace App\Livewire\Admin\VillageAparatus;

use App\Models\VillageAparatus;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin')]
    public VillageAparatus $village_aparatus;
    public $breadcrumbs = [
        [
            "name" => "Perangkat Desa",
            "route" => "admin.village-aparatus.index",
        ],
        [
            "name" => "Detail Perangkat Desa",
            "route" => "",
        ],
    ];
    public function render()
    {
        return view('livewire.admin.village-aparatus.show')->title("Detail Perangkat Desa");
    }
}
