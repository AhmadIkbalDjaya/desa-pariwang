<?php

namespace App\Livewire\Admin\Location\Marker;

use App\Livewire\Forms\Admin\MarkerForm;
use App\Models\Marker;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public Marker $marker;
    public MarkerForm $form;
    public function mount(Marker $marker) {
        $this->form->setMarker($marker);
    }
    public function render()
    {
        return view('livewire.admin.location.marker.edit')->title('Edit Penanda');
    }
    public function update() {
        $this->form->update();
        $this->redirectRoute("admin.location.index", navigate: true);
        flash("Penanda Berhasil Diedit", "success");
        $this->dispatch("show-notif");
    }
}
