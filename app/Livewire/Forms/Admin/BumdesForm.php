<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Bumdes;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BumdesForm extends Form
{
    public ?Bumdes $bumdes;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $director;
    #[Validate("required|boolean")]
    public $certification_status=false;
    #[Validate("required|numeric")]
    public $total_employee;
    #[Validate("required|string")]
    public $unit;
    // #[Validate("file")]
    public $certificate_file;
    #[Validate("required")]
    public $phone;
    
    public function setBumdes(Bumdes $bumdes) {
        $this->bumdes = $bumdes;
        $this->name = $bumdes->name;
        $this->director = $bumdes->director;
        $this->certification_status = $bumdes->certification_status;
        $this->total_employee = $bumdes->total_employee;
        $this->unit = $bumdes->unit;
        $this->certificate_file = $bumdes->certificate_file;
        $this->phone = $bumdes->phone;
    }

    public function store() {
        $validated = $this->validate();
        if ($this->certificate_file) {
            $validated["certificate_file"] = $this->certificate_file->storePublicly("certificate_file");
        } else {
            unset($validated['certificate_file']);
        }
        Bumdes::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        if ($this->certificate_file && gettype($this->certificate_file) == "object") {
            if (Storage::exists($this->certificate_file)) {
                Storage::delete($this->certificate_file);
            }
            $validated["certificate_file"] = $this->certificate_file->storePublicly("certificate_file");
        } else {
            unset($validated["certificate_file"]);
        }
        $this->bumdes->update($validated);
    }

    public function delete() {
        if ($this->certificate_file) {
            if (Storage::exists($this->certificate_file)) {
                Storage::delete($this->certificate_file);
            }
        }
        $this->bumdes->delete();
    }
}
