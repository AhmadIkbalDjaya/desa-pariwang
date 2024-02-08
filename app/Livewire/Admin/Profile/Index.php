<?php

namespace App\Livewire\Admin\Profile;

use App\Livewire\Forms\Admin\ProfileForm;
use App\Models\Profile;
use App\Models\VillageStatus;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('components.layouts.admin')] 
    public ProfileForm $form;

    public function mount() {
        $this->form->setProfile(Profile::get()->first());
    }
    public function render()
    {
        return view('livewire.admin.profile.index', [
            "village_statuses" => VillageStatus::all(),
        ])->title("Profile");
    }

    public function update() {
        $this->form->update();
        flash('Profil Berhasil Diupdate', 'success');
        $this->dispatch('show-notif');
    }
}
