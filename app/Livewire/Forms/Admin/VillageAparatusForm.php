<?php

namespace App\Livewire\Forms\Admin;

use App\Models\VillageAparatus;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VillageAparatusForm extends Form
{
    public ?VillageAparatus $village_aparatus;
    #[Validate]
    public $name;

    #[Validate]
    public $position;

    #[Validate]
    public $pob;

    #[Validate]
    public $dob;

    #[Validate]
    public $gender;

    #[Validate]
    public $photo;

    #[Validate]
    public $education;

    #[Validate]
    public $job;

    #[Validate]
    public $religion = "Islam";

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "position" => "required|string",
            "pob" => "nullable|string",
            "dob" => "nullable|date",
            "gender" => "required|in:male,female",
            "photo" => "nullable|image",
            "education" => "nullable|string",
            "job" => "nullable|string",
            "religion" => "nullable|in:Islam,Kristen Protestan,Kristen Katolik,Hindu,Buddha,Konghucu",
        ];
    }

    public function setVillageAparatus(VillageAparatus $village_aparatus)
    {
        $this->village_aparatus = $village_aparatus;
        $this->name = $village_aparatus->name;
        $this->position = $village_aparatus->position;
        $this->pob = $village_aparatus->pob;
        $this->dob = $village_aparatus->dob;
        $this->gender = $village_aparatus->gender->value;
        $this->education = $village_aparatus->education;
        $this->job = $village_aparatus->job;
        $this->religion = $village_aparatus->religion->value;
    }

    public function store()
    {
        $validated = $this->validate();
        if ($this->photo) {
            $validated["photo"] = $this->photo->storePublicly("aparatus");
        } else {
            unset($validated["photo"]);
        }
        VillageAparatus::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        if ($this->photo && gettype($this->photo) == "object") {
            if (Storage::exists($this->photo)) {
                Storage::delete($this->photo);
            }
            $validated["photo"] = $this->photo->storePublicly("bumdes");
        } else {
            unset($validated["photo"]);
        }
        $this->village_aparatus->update($validated);
    }

    public function delete()
    {
        if ($this->village_aparatus->photo && Storage::exists($this->village_aparatus->photo)) {
            Storage::delete($this->village_aparatus->photo);
        }
        $this->village_aparatus->delete();
    }
}
