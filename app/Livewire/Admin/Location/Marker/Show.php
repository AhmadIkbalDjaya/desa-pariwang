<?php

namespace App\Livewire\Admin\Location\Marker;

use App\Livewire\Forms\Admin\MarkerForm;
use App\Models\Marker;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin')]
    public Marker $marker;
    public MarkerForm $form;
    public $breadcrumbs = [
        [
            "name" => "Lokasi & Penanda",
            "route" => "admin.location.index",
        ],
        [
            "name" => "Detail Penanda",
            "route" => "",
        ],
    ];
    public function mount() {
        $this->form->setMarker($this->marker);
    }
    public function render()
    {
        return view('livewire.admin.location.marker.show')->title("Detail Penanda");
    }

    public function destroy() {
        $this->form->delete();
        flash("Penanda Berhasil Dihapus", "danger");
        $this->redirectRoute("admin.location.index", navigate: true);
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
}
