<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Marker;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class MarkerForm extends Form
{
    public ?Marker $marker;
    #[Validate]
    public $name;

    #[Validate]
    public $description;

    #[Validate]
    public $image;

    #[Validate]
    public $longitude;

    #[Validate]
    public $latitude;

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "description" => "required|string",
            "image" => "nullable|image",
            "longitude" => "required|string",
            "latitude" => "required|string",
        ];
    }

    public function setMarker(Marker $marker)
    {
        $this->marker = $marker;
        $this->name = $marker->name;
        $this->description = $marker->description;
        $this->longitude = $marker->longitude;
        $this->latitude = $marker->latitude;
    }

    public function resetMarker()
    {
        $this->reset();
    }


    public function store()
    {
        $validated = $this->validate();
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("marker");
        }else {
            unset($validated["image"]);
        }
        Marker::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        if ($this->image && gettype($this->image) == "object") {
            if ($this->marker->image && Storage::exists($this->marker->image)) {
                Storage::delete($this->marker->image);
            }
            $validated["image"] = $this->image->storePublicly("marker");
        } else {
            unset($validated["image"]);
        }
        $this->marker->update($validated);

    }

    public function delete()
    {
        if ($this->marker->image && Storage::exists($this->marker->image)) {
            Storage::delete($this->marker->image);
        }
        $this->marker->delete();
    }
}
