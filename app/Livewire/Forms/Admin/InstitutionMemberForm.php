<?php

namespace App\Livewire\Forms\Admin;

use App\Models\InstitutionMember;
use Illuminate\Support\Facades\Storage;
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
    #[Validate("nullable|image")]
    public $photo;
    #[Validate("required|in:male,female")]
    public $gender;
    public $show_photo;

    public function setInstitutionMember(InstitutionMember $institutionMember) {
        $this->institutionMember = $institutionMember;
        $this->name = $institutionMember->name;
        $this->gender = $institutionMember->gender;
        $this->position = $institutionMember->position;
        $this->show_photo = $institutionMember->photo;
        // $this->institution_id = $institutionMember->institution_id;
    }
    
    public function resetInstitutionMember() {
        $this->institutionMember = null;
        $this->name = null;
        $this->gender = null;
        $this->position = null;
        $this->photo = null;
        $this->show_photo = null;
    }

    public function store() {
        $validated = $this->validate();
        if ($this->photo) {
            $validated['photo'] = $this->photo->storePublicly('institutionmember');
        } else {
            unset($validated["photo"]);
        }
        InstitutionMember::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        if ($this->photo && gettype($this->photo) == "object") {
            if (Storage::exists($this->photo)) {
                Storage::delete($this->photo);
            }
            $validated["photo"] = $this->photo->storePublicly("institutionmember");
        } else {
            unset($validated["photo"]);
        }
        $this->institutionMember->update($validated);
    }

    public function delete() {
        if ($this->photo) {
            if (Storage::exists($this->photo)) {
                Storage::delete($this->photo);
            }
        }
        $this->institutionMember->delete();
    }
}
