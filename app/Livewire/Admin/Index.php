<?php

namespace App\Livewire\Admin;

use App\Models\Article;
use App\Models\Bumdes;
use App\Models\Institution;
use App\Models\Profile;
use App\Models\VillageAparatus;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')] 
    public function render()
    {
        $aparatuses = VillageAparatus::latest()->limit(5)->get();
        $institutions = Institution::latest()->limit(5)->get();
        return view('livewire.admin.index', [
            "institution_count" => Institution::count(),
            "bumdes_count" => Bumdes::count(),
            "village_aparatus_count" => VillageAparatus::count(),
            "article_count" => Article::count(),
            "profile" => Profile::get()->first(),
            "aparatuses" => $aparatuses,
            "institutions" => $institutions,
        ])->title("Admin");
    }
}
