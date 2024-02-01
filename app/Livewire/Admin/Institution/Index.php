<?php

namespace App\Livewire\Admin\Institution;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')] 
    public function render()
    {
        return view('livewire.admin.institution.index')->title("Kelembagaan");
    }
}
