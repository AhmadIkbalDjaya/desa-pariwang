<?php

namespace App\Livewire\Public\Components;

use App\Models\Profile;
use Livewire\Component;

class Navbar extends Component
{
    public $open = false;
    public function render()
    {
        return view('livewire.public.components.navbar', [
            "profile" => Profile::select(["id", "name"])->first(),
        ]);
    }

    public function clickOpen()
    {
        $this->open = !$this->open;
    }
}
