<?php

namespace App\Livewire\Admin\Bumdes;

use App\Models\Bumdes;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('components.layouts.admin')]
    public Bumdes $bumdes;
    public function render()
    {
        return view('livewire.admin.bumdes.edit')->title("Edit Bumdes");
    }
}
