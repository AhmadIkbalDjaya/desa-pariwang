<?php

namespace App\Livewire\Admin\Location;

use App\Livewire\Forms\admin\LocationForm;
use App\Models\Location;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')]
    public LocationForm $form;
    public function mount() {
        $this->form->setLocation(Location::get()->first());
    }
    public function render()
    {
        return view('livewire.admin.location.index')->title("Lokasi Desa");
    }

    public function update() {
        $this->form->update();
        flash("Lokasi Berhasil Diperbaharui", "success");
        $this->dispatch("show-notif");
    }
}
