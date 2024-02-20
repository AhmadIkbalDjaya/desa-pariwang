<?php

namespace App\Livewire\Forms\admin;

use App\Models\Location;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LocationForm extends Form
{
    public ?Location $location;
    #[Validate("required|string")]
    public $longitude;
    #[Validate("required|string")]
    public $latitude;
    #[Validate("required|string")]
    public $province;
    #[Validate("required|string")]
    public $regency;
    #[Validate("required|string")]
    public $district;
    #[Validate("required|string")]
    public $border_east;
    #[Validate("required|string")]
    public $border_west;
    #[Validate("required|string")]
    public $border_south;
    #[Validate("required|string")]
    public $border_north;
    #[Validate("required|string")]
    public $area;

    public function setLocation(Location $location) {
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

    public function resetLocation() {
        $this->location = null;
        $this->longitude = null;
        $this->latitude = null;
        $this->province = null;
        $this->regency = null;
        $this->district = null;
        $this->border_east = null;
        $this->border_west = null;
        $this->border_south = null;
        $this->border_north = null;
        $this->area = null;
    }

    public function store() {
        $validated = $this->validate();
        Location::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->location->update($validated);
    }

    public function delete() {
        $this->location->delete();
    }
}
