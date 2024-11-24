<?php

namespace App\Livewire\Public\Components;

use App\Models\Profile;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Navbar extends Component
{
    public $menuItems = [
        ["label" => "Home", "route" => "home", "active" => "/"],
        ["label" => "Berita", "route" => "article", "active" => "berita-&-kegiatan*"],
        ["label" => "Bumdes", "route" => "bumdes", "active" => "bumdes*"],
        ["label" => "Kelembagaan", "route" => "institution", "active" => "kelembagaan"],
        ["label" => "Tentang", "route" => "about", "active" => "tentang"],
    ];
    public function render()
    {
        $profile = Cache::rememberForever('navbar-profile', function () {
            return Profile::select(["id", "name"])->first();
        });
        
        return view('livewire.public.components.navbar', [
            "menuItems" => $this->menuItems,
            "profile" => $profile,
        ]);
    }
}
