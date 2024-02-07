<?php

namespace App\Livewire\Admin\VillageAparatus;

use App\Livewire\Forms\Admin\VillageAparatusForm;
use App\Models\VillageAparatus;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public VillageAparatus $village_aparatus;
    public VillageAparatusForm $form;
    public function mount(VillageAparatus $village_aparatus) {
        $this->form->setVillageAparatus($village_aparatus);
    }

    public function render()
    {
        return view('livewire.admin.village-aparatus.edit')->title("Eddit Perangkat Desa");
    }

    public function update() {
        $this->form->update();
        $this->redirectRoute("admin.village-aparatus.index", navigate: true);
        flash("Perangkat Desa Berhasil Diedit", "success");
        $this->dispatch('show-notif');
    }
}
