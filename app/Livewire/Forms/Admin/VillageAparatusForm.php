<?php

namespace App\Livewire\Forms\Admin;

use App\Models\VillageAparatus;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VillageAparatusForm extends Form
{
    public ?VillageAparatus $village_aparatus;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $position;
    #[Validate("required|string")]
    public $pob;
    #[Validate("required|date")]
    public $dob;
    #[Validate("required|in:male,female")]
    public $gender;
    #[Validate("nullable|image")]
    public $photo;
    #[Validate("nullable|string")]
    public $education;
    #[Validate("nullable|string")]
    public $job;
    #[Validate("nullable|in:Islam,Kristen Protestan,Kristen Katolik,Hindu,Buddha,Konghucu")]
    public $religion;

    public function setVillageAparatus(VillageAparatus $village_aparatus) {
        $this->village_aparatus = $village_aparatus;
        $this->name = $village_aparatus->name;
        $this->position = $village_aparatus->position;
        $this->pob = $village_aparatus->pob;
        $this->dob = $village_aparatus->dob;
        $this->gender = $village_aparatus->gender;
        $this->photo = $village_aparatus->photo;
        $this->education = $village_aparatus->education;
        $this->job = $village_aparatus->job;
        $this->religion = $village_aparatus->religion;
    }

    public function store() {
        $validated = $this->validate();
        if ($this->photo) {
            $validated['photo'] = $this->photo->storePublicly('aparatus');
        } else {
            unset($validated["photo"]);
        }
        VillageAparatus::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        if ($this->photo && gettype($this->photo) == "object") {
            if (Storage::exists($this->photo)) {
                Storage::delete($this->photo);
            }
        }
        $this->village_aparatus->update($validated);
    }

    public function delete() {
        if ($this->photo) {
            if (Storage::exists($this->photo)) {
                Storage::delete($this->photo);
            }
        }
        $this->village_aparatus->delete();
    }
}
