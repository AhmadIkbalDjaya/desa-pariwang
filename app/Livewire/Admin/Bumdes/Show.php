<?php

namespace App\Livewire\Admin\Bumdes;

use App\Livewire\Forms\Admin\BumdesForm;
use App\Models\Bumdes;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin')]
    public Bumdes $bumdes;
    public BumdesForm $form;
    public $breadcrumbs = [
        [
            "name" => "Bumdes",
            "route" => "admin.bumdes.index",
        ],
        [
            "name" => "Detail Bumdes",
            "route" => "",
        ],
    ];
    public function mount() {
        $this->form->setBumdes($this->bumdes);
    }
    public function render()
    {
        return view('livewire.admin.bumdes.show')->title('Detail Bumdes');
    }

    public function destroy() {
        $this->form->delete();
        flash('Bumdes Berhasil Dihapus', 'danger');   
        $this->redirectRoute('admin.bumdes.index', navigate: true);
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
}
