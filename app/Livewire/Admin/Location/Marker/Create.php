<?php

namespace App\Livewire\Admin\Location\Marker;

use App\Livewire\Forms\Admin\MarkerForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public ?MarkerForm $form;
    public function render()
    {
        return view('livewire.admin.location.marker.create')->title("Tambah Penanda");
    }

    public function store() {
        $this->form->store();
        $this->redirectRoute("admin.location.index", navigate: true);
        flash("Penanda Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
    }
}
