<?php

namespace App\Livewire\Admin\Components;

use App\Models\Institution;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.admin.components.sidebar', [
            "institutions" => Institution::latest()->get(),
        ]);
    }
}
