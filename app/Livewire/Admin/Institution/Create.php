<?php

namespace App\Livewire\Admin\Institution;

use App\Livewire\Forms\Admin\InstitutionForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('components.layouts.admin')]
    public ?InstitutionForm $form;
    public $breadcrumbs = [
        [
            "name" => "Kelembagaan",
            "route" => "admin.institution.index",
        ],
        [
            "name" => "Tambah Kelembagaan",
            "route" => "",
        ],
    ];
    public function render()
    {
        return view('livewire.admin.institution.create')->title("Tambah Lembaga");
    }

    public function store() {
        $this->form->store();
        $this->redirectRoute("admin.institution.index", navigate: true);
        flash("Lembaga Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
    }
}
