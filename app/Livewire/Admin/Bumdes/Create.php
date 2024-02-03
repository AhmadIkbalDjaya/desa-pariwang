<?php

namespace App\Livewire\Admin\Bumdes;

use App\Livewire\Forms\Admin\BumdesForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public BumdesForm $form;
    public function render()
    {
        return view('livewire.admin.bumdes.create')->title("Tambah Bumdes");
    }

    public function store() {
        $this->form->store();
        $this->redirectRoute('admin.bumdes.index', navigate: true);
        flash('Bumdes Berhasil Ditambahkan', 'success');
        $this->dispatch('show-notif');
    }
}
