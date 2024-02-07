<?php

namespace App\Livewire\Admin\VillageAparatus;

use App\Livewire\Forms\Admin\VillageAparatusForm;
use App\Models\VillageAparatus;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')]
    public $perpage = 10;
    public $search = "";
    public VillageAparatusForm $form;
    public function render()
    {
        $search = $this->search;
        $aparatuses = VillageAparatus::where("name", "LIKE", "%$search%")->latest()->paginate($this->perpage);
        return view('livewire.admin.village-aparatus.index', [
            "aparatuses" => $aparatuses,
        ])->title("Perangkat Desa");
    }

    public function setVillageAparatus(VillageAparatus $village_aparatus) {
        $this->form->setVillageAparatus($village_aparatus);
    }

    public function destroy() {
        $this->form->delete();
        flash("Aparat Berhasil Dihapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
    }
}
