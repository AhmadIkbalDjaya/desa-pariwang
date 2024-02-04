<?php

namespace App\Livewire\Admin\Institution;

use App\Livewire\Forms\Admin\InstitutionMemberForm;
use App\Models\Institution;
use App\Models\InstitutionMember;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')]
    public $perpage = 10;
    public $search = "";
    public Institution $institution;
    public InstitutionMemberForm $form;
    public function mount() {
        $this->form->institution_id = $this->institution->id;
    }
    public function render()
    {
        $search = $this->search;
        $members = InstitutionMember::where("institution_id", $this->institution->id)
                                    ->where("name", "LIKE", "%$search%")
                                    ->latest()->paginate($this->perpage);
        return view('livewire.admin.institution.show', [
            "members" => $members,
        ])->title($this->institution->name);
    }

    public function setInstitutionMember(InstitutionMember $institutionMember) {
        $this->form->setInstitutionMember($institutionMember);
    }

    public function resetInstitutionMember() {
        $this->form->resetInstitutionMember();
    }

    public function store() {
        $this->form->store();
        flash("Anggota Berhasil Ditambahkan");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->form->resetInstitutionMember();
    }

    public function update() {
        $this->form->update();
        flash("Anggota Berhasil Diedit");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->form->resetInstitutionMember();
    }

    public function destroy() {
        $this->form->delete();
        flash("Anggota Berhasil Dihapus");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
        $this->form->resetInstitutionMember();
    }
}
