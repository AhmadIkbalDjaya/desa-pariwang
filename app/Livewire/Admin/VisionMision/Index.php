<?php

namespace App\Livewire\Admin\VisionMision;

use App\Livewire\Forms\Admin\VisionMissionForm;
use App\Models\VisionMission;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')]
    public $search = "";
    public VisionMissionForm $misionForm;
    public VisionMissionForm $visionForm;
    public $breadcrumbs = [
        [
            "name" => "Visi Misi",
            "route" => "",
        ],
    ];
    public function mount() {
        $this->visionForm->setVisionMission(VisionMission::get()->first());
    }
    public function render()
    {
        $search = $this->search;
        return view('livewire.admin.vision-mision.index', [
            "misions" => VisionMission::where('is_visi', false)->where('content', "LIKE", "%$search%")->latest()->get(),
        ])->title("Visi Misi");
    }

    public function updateVisi() {
        $this->visionForm->update();
        flash("Visi Diubah", "success");
        $this->dispatch('show-notif');
    }

    public function setMision(VisionMission $visionMission) {
        $this->misionForm->resetVisionMission();
        $this->misionForm->setVisionMission($visionMission);
    }

    public function resetMision() {
        $this->misionForm->resetVisionMission();
    }

    public function storeMision() {
        $this->misionForm->store();
        flash("Misi Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->misionForm->resetVisionMission();
    }

    public function updateMision() {
        $this->misionForm->update();
        flash("Misi Berhasil Diupdate", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->misionForm->resetVisionMission();
    }

    public function destroyMision() {
        $this->misionForm->delete();
        flash("Misi Berhasil Dihapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->misionForm->resetVisionMission();
    }
}
