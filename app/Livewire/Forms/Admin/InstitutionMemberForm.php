<?php

namespace App\Livewire\Forms\Admin;

use App\Models\InstitutionMember;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InstitutionMemberForm extends Form
{
    public ?InstitutionMember $institutionMember;
    #[Validate]
    public $name;
    #[Validate]
    public $position;
    #[Validate]
    public $institution_id;
    #[Validate]
    public $photo;
    #[Validate]
    public $gender;
    public $show_photo;
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "position" => "required|string",
            "institution_id" => "required|exists:institutions,id",
            "photo" => "nullable|image",
            "gender" => "required|in:male,female",
        ];
    }

    public function setInstitutionMember(InstitutionMember $institutionMember)
    {
        $this->institutionMember = $institutionMember;
        $this->name = $institutionMember->name;
        $this->gender = $institutionMember->gender->value;
        $this->position = $institutionMember->position;
        $this->show_photo = $institutionMember->photo;
    }

    public function resetInstitutionMember()
    {
        $this->reset();
    }

    public function store()
    {
        $validated = $this->validate();
        if ($this->photo) {
            $validated['photo'] = $this->photo->storePublicly('institutionmember');
        } else {
            unset($validated["photo"]);
        }
        InstitutionMember::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        if ($this->photo && gettype($this->photo) == "object") {
            if ($this->institutionMember->photo && Storage::exists($this->institutionMember->photo)) {
                Storage::delete($this->institutionMember->photo);
            }
            $validated["photo"] = $this->photo->storePublicly("institutionmember");
        } else {
            unset($validated["photo"]);
        }
        $this->institutionMember->update($validated);
    }

    public function delete()
    {
        if ($this->institutionMember->photo && Storage::exists($this->institutionMember->photo)) {
            Storage::delete($this->institutionMember->photo);
        }
        $this->institutionMember->delete();
    }
}
