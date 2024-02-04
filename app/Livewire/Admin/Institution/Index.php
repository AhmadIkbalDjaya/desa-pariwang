<?php

namespace App\Livewire\Admin\Institution;

use App\Livewire\Forms\Admin\InstitutionForm;
use App\Models\Institution;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')] 
    public $perpage = 10;
    public $search = "";
    public InstitutionForm $form;

    public function render()
    {
        $search = $this->search;
        $institutions = Institution::where("name", "LIKE", "%$search%")->latest()->paginate($this->perpage);
        return view('livewire.admin.institution.index', [
            "institutions" => $institutions,
        ])->title("Kelembagaan");
    }

    public function setInstitution(Institution $bumdes) {
        $this->form->setInstitution($bumdes);
    }
    
    public function destroy() {
        $this->form->delete();
        flash('Lembaga Berhasil Dihapus', 'danger');        
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
}
