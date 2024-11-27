<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Bumdes;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BumdesForm extends Form
{
    public ?Bumdes $bumdes;
    #[Validate]
    public $name;
    #[Validate]
    public $description;
    #[Validate]
    public $director;
    #[Validate]
    public $certification_status = false;
    #[Validate]
    public $total_employee;
    #[Validate]
    public $unit;
    #[Validate]
    public $image;
    #[Validate]
    public $phone;

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "description" => "required|string|min:100",
            "director" => "required|string",
            "certification_status" => "required|boolean",
            "total_employee" => "required|numeric|min:0",
            "unit" => "required|string",
            "image" => "nullable|image",
            "phone" => "nullable|phone:ID",
        ];
    }

    public function setBumdes(Bumdes $bumdes)
    {
        $this->bumdes = $bumdes;
        $this->name = $bumdes->name;
        $this->description = $bumdes->description;
        $this->director = $bumdes->director;
        $this->certification_status = $bumdes->certification_status;
        $this->total_employee = $bumdes->total_employee;
        $this->unit = $bumdes->unit;
        $this->phone = $bumdes->phone;
    }

    public function store()
    {
        $validated = $this->validate();
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("bumdes");
        } else {
            unset($validated["image"]);
        }
        Bumdes::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        if ($this->image && gettype($this->image) == "object") {
            if ($this->bumdes->image && Storage::exists($this->image)) {
                Storage::delete($this->bumdes->image);
            }
            $validated["image"] = $this->image->storePublicly("bumdes");
        } else {
            unset($validated["image"]);
        }
        $this->bumdes->update($validated);
    }

    public function delete()
    {
        if ($this->bumdes->image && Storage::exists($this->image)) {
            Storage::delete($this->bumdes->image);
        }
        $this->bumdes->delete();
    }
}
