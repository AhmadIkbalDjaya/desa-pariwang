<?php

namespace App\Livewire\Admin\Bumdes;

use App\Livewire\Forms\Admin\BumdesForm;
use App\Models\Bumdes;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public Bumdes $bumdes;
    public BumdesForm $form;
    public $breadcrumbs = [
        [
            "name" => "Bumdes",
            "route" => "admin.bumdes.index",
        ],
        [
            "name" => "Edit Bumdes",
            "route" => "",
        ],
    ];
    public function mount(Bumdes $bumdes) {
        $this->form->setBumdes($this->bumdes);
    }
    public function render()
    {
        return view('livewire.admin.bumdes.edit')->title("Edit Bumdes");
    }

    public function update() {
        $this->form->update();
        $this->redirectRoute('admin.bumdes.index', navigate:true);
        flash('Bumdes Berhasil Diedit', 'success');
        $this->dispatch('show-notif');
    }
}
