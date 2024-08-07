<?php

namespace App\Livewire\Admin\Bumdes;

use App\Livewire\Forms\Admin\BumdesForm;
use App\Models\Bumdes;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')] 
    public $perpage = 10;
    public $search = "";
    public BumdesForm $form;
    public $breadcrumbs = [
        [
            "name" => "Bumdes",
            "route" => "",
        ],
    ];
    public function render()
    {
        $search = $this->search;
        $bumdeses = Bumdes::where("name", "LIKE", "%$search%")->latest()->paginate($this->perpage);
        return view('livewire.admin.bumdes.index', [
            "bumdeses" => $bumdeses,
        ])->title("Badan Usaha Milik Desa");
    }

    public function setBumdes(Bumdes $bumdes) {
        $this->form->setBumdes($bumdes);
    }
    
    public function destroy() {
        $this->form->delete();
        flash('Bumdes Berhasil Dihapus', 'danger');        
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
}
