<?php

namespace App\Livewire\Admin\Institution;

use App\Livewire\Forms\Admin\InstitutionForm;
use App\Models\Institution;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('components.layouts.admin')]
    public Institution $institution;
    public InstitutionForm $form;
    public function mount(Institution $institution) {
        $this->form->setInstitution($this->institution);
    }

    public function render()
    {
        return view('livewire.admin.institution.edit')->title("Edit Lembaga");
    }

    public function update() {
        $this->form->update();
        $this->redirectRoute('admin.institution.index', navigate:true);
        flash('Lembaga Berhasil Diedit', 'success');
        $this->dispatch('show-notif');
    }
}
