<?php

namespace App\Livewire\Admin\Bumdes;

use Livewire\Attributes\Layout;
use Livewire\Component;

class 
Create extends Component
{
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.bumdes.create')->title("Tambah Bumdes");
    }
}
