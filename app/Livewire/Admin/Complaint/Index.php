<?php

namespace App\Livewire\Admin\Complaint;

use App\Livewire\Forms\Admin\ComplaintForm;
use App\Models\Complaint;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')]
    public $perpage = 10;
    public $search = "";
    public ComplaintForm $form;
    public $breadcrumbs = [
        [
            "name" => "Kritik dan Masukan",
            "route" => "",
        ],
    ];
    public function render()
    {
        $search = $this->search;
        $complaints = Complaint::where("name", "LIKE", "%$search%")->latest()->paginate($this->perpage);
        return view('livewire.admin.complaint.index', [
            "complaints" => $complaints,
        ])->title("Kritik dan Saran");
    }

    public function setComplaint(Complaint $complaints) {
        $this->form->resetCommplaint();
        $this->form->setComplaint($complaints);
    }

    public function resetComplaint() {
        $this->form->resetCommplaint();
    }
    public function destroy() {
        $this->form->delete();
        flash("Masukan Berhasil Dihapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->form->resetCommplaint();
    }
}
