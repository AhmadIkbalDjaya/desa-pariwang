<?php

namespace App\Livewire\Admin\VillageAparatus;

use App\Livewire\Forms\Admin\VillageAparatusForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public VillageAparatusForm $form;
    public $breadcrumbs = [
        [
            "name" => "Perangkat Desa",
            "route" => "admin.village-aparatus.index",
        ],
        [
            "name" => "Tambah Perangkat Desa",
            "route" => "",
        ],
    ];

    public function render()
    {
        return view('livewire.admin.village-aparatus.create')->title("Tambah Perangkat Desa");
    }

    public function store() {
        $this->form->store();
        $this->redirectRoute('admin.village-aparatus.index', navigate: true);
        flash("Perangkat Desa Berhasil Ditambahkan", "success");
        $this->dispatch('show-notif');
    }
}
