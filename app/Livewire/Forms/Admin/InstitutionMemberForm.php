<?php

namespace App\Livewire\Forms\Admin;

use App\Models\InstitutionMember;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InstitutionMemberForm extends Form
{
    public ?InstitutionMember $institutionMember;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $position;
    #[Validate("required|exists:institutions,id")]
    public $institution_id;

    public function setInstitutionMember(InstitutionMember $institutionMember) {
        $this->institutionMember = $institutionMember;
        $this->name = $institutionMember->name;
        $this->position = $institutionMember->position;
        // $this->institution_id = $institutionMember->institution_id;
    }
    
    public function resetInstitutionMember() {
        $this->institutionMember = null;
        $this->name = null;
        $this->position = null;
        
    }

    public function store() {
        $validated = $this->validate();
        InstitutionMember::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->institutionMember->update($validated);
    }

    public function delete() {
        $this->institutionMember->delete();
    }
}
