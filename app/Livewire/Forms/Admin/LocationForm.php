<?php

namespace App\Livewire\Forms\admin;

use App\Models\Location;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LocationForm extends Form
{
    public ?Location $location;
    #[Validate]
    public $longitude;
    #[Validate]
    public $latitude;
    #[Validate]
    public $province;
    #[Validate]
    public $regency;
    #[Validate]
    public $district;
    #[Validate]
    public $border_east;
    #[Validate]
    public $border_west;
    #[Validate]
    public $border_south;
    #[Validate]
    public $border_north;
    #[Validate]
    public $area;

    public function rules(): array
    {
        return [
            "longitude" => "required|string",
            "latitude" => "required|string",
            "province" => "required|string",
            "regency" => "required|string",
            "district" => "required|string",
            "border_east" => "required|string",
            "border_west" => "required|string",
            "border_south" => "required|string",
            "border_north" => "required|string",
            "area" => "required|string",
        ];
    }

    public function setLocation(Location $location)
    {
        $this->location = $location;
        $this->longitude = $location->longitude;
        $this->latitude = $location->latitude;
        $this->province = $location->province;
        $this->regency = $location->regency;
        $this->district = $location->district;
        $this->border_east = $location->border_east;
        $this->border_west = $location->border_west;
        $this->border_south = $location->border_south;
        $this->border_north = $location->border_north;
        $this->area = $location->area;
    }

    public function resetLocation()
    {
        $this->reset();
    }

    public function store()
    {
        $validated = $this->validate();
        Location::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        $this->location->update($validated);
    }

    public function delete()
    {
        $this->location->delete();
    }
}
