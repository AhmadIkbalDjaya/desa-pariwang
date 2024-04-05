<?php

namespace App\Livewire\Admin\Location;

use App\Livewire\Forms\admin\LocationForm;
use App\Livewire\Forms\Admin\MarkerForm;
use App\Models\Location;
use App\Models\Marker;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')]
    public $search;
    public LocationForm $form;
    public MarkerForm $markerForm;
    public $breadcrumbs = [
        [
            "name" => "Lokasi & Penanda",
            "route" => "",
        ],
    ];
    public function mount() {
        $this->form->setLocation(Location::get()->first());
    }
    public function render()
    {
        $search = $this->search;
        return view('livewire.admin.location.index', [
            "markers" => Marker::where('name', "LIKE", "%$search%")->latest()->paginate(10),
        ])->title("Lokasi Desa");
    }

    public function update() {
        $this->form->update();
        flash("Lokasi Berhasil Diperbaharui", "success");
        $this->dispatch("show-notif");
    }

    public function setMarker(Marker $marker) {
        $this->markerForm->resetMarker();
        $this->markerForm->setMarker($marker);
    }

    public function resetMarker() {
        $this->markerForm->resetMarker();
    }

    public function storeMarker() {
        $this->markerForm->store();
        flash("Penanda Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->markerForm->resetMarker();
    }

    public function updateMarker() {
        $this->markerForm->update();
        flash("Penanda Berhasil Diedit", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->markerForm->resetMarker();
    }

    public function destroyMarker() {
        $this->markerForm->delete();
        flash("Penanda Berhasil Dihapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->markerForm->resetMarker();
    }
}
