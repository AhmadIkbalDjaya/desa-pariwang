<?php

namespace App\Livewire\Admin\Profile;

use App\Livewire\Forms\Admin\HamletForm;
use App\Livewire\Forms\Admin\ProfileForm;
use App\Models\Hamlet;
use App\Models\Profile;
use App\Models\VillageStatus;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')] 
    public $search = "";
    public ProfileForm $form;
    public HamletForm $hamletForm;

    public function mount() {
        $this->form->setProfile(Profile::get()->first());
    }
    public function render()
    {
        $search = $this->search;
        return view('livewire.admin.profile.index', [
            "village_statuses" => VillageStatus::all(),
            "hamlets" => Hamlet::where("name", "LIKE", "%$search%")
                        ->latest()->paginate(10),
        ])->title("Profile");
    }

    public function update() {
        $this->form->update();
        flash('Profil Berhasil Diupdate', 'success');
        $this->dispatch('show-notif');
    }

    public function setHamlet(Hamlet $hamlet) {
        $this->hamletForm->resetHamlet();
        $this->hamletForm->setHamlet($hamlet);
    }

    public function resetHamlet() {
        $this->hamletForm->resetHamlet();
    }

    public function storeHamlet() {
        $this->hamletForm->store();
        flash("Dusun Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->hamletForm->resetHamlet();
    }

    public function updateHamlet() {
        $this->hamletForm->update();
        flash("Dusun Berhasil Diedit", "success");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->hamletForm->resetHamlet();
    }

    public function destroyHamlet() {
        $this->hamletForm->delete();
        flash("Dusun Berhasil Dihapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->hamletForm->resetHamlet();
    }
}
