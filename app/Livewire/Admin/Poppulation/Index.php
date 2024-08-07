<?php

namespace App\Livewire\Admin\Poppulation;

use App\Livewire\Forms\Admin\PopulationForm;
use App\Models\Population;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout("components.layouts.admin")]
    public PopulationForm $form;
    public $breadcrumbs = [
        [
            "name" => "Kependudukan",
            "route" => "",
        ],
    ];
    public function mount() {
        $this->form->setPopulation(Population::get()->first());
    }
    
    public function render()
    {
        return view('livewire.admin.poppulation.index')->title("Kependudukan");
    }

    public function update() {
        $this->form->update();
        flash("Data Penduduk Berhasil Diperbaharui", "success");
        $this->dispatch("show-notif");
    }
}
