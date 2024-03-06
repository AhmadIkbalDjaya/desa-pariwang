<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Marker;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MarkerForm extends Form
{
    public ?Marker $marker;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $description;
    #[Validate("nullable|image")]
    public $image;
    #[Validate("required|string")]
    public $longitude;
    #[Validate("required|string")]
    public $latitude;

    public function setMarker(Marker $marker) {
        $this->marker = $marker;
        $this->name = $marker->name;
        $this->description = $marker->description;
        $this->longitude = $marker->longitude;
        $this->latitude = $marker->latitude;
    }

    public function resetMarker() {
        $this->marker = null;
        $this->name = null;
        $this->description = null;
        $this->image = null;
        $this->longitude = null;
        $this->latitude = null;
    }


    public function store() {
        $validated = $this->validate();
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("marker");
        }
        Marker::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        if ($this->image && gettype($this->image) == "object") {
            if (Storage::exists($this->image)   ) {
                Storage::delete($this->image);
            }
            $validated["image"] = $this->image->storePublicly("marker");
        } else {
            unset($validated["image"]);
        }
        $this->marker->update($validated);
        
    }

    public function delete() {
        if ($this->image && Storage::exists($this->image)) {
            Storage::delete($this->image);
        }
        $this->marker->delete();
    }
}
