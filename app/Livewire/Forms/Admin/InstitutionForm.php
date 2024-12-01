<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Institution;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InstitutionForm extends Form
{
    public ?Institution $institution;
    #[Validate]
    public $name;
    #[Validate]
    public $abbreviation;
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "abbreviation" => "nullable|string",
        ];
    }

    public function setInstitution(Institution $institution)
    {
        $this->institution = $institution;
        $this->name = $institution->name;
        $this->abbreviation = $institution->abbreviation;
    }

    public function store()
    {
        $validated = $this->validate();
        Institution::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        $this->institution->update($validated);
    }

    public function delete()
    {
        $this->institution->delete();
    }
}
