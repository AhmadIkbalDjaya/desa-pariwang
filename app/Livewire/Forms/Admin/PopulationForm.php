<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Population;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PopulationForm extends Form
{
    public ?Population $population;
    #[Validate("nullable|numeric|min:0")]
    public $total_population;
    #[Validate("nullable|numeric|min:0")]
    public $male;
    #[Validate("nullable|numeric|min:0")]
    public $female;
    #[Validate("nullable|numeric|min:0")]
    public $family;
    #[Validate("nullable|numeric|min:0")]
    public $temporary;
    #[Validate("nullable|numeric|min:0")]
    public $mutation;

    public function setPopulation(Population $population) {
        $this->population = $population;
        $this->total_population = $population->total_population;
        $this->male = $population->male;
        $this->female = $population->female;
        $this->family = $population->family;
        $this->temporary = $population->temporary;
        $this->mutation = $population->mutation;
    }

    public function resetPopulation() {
        $this->population = null;
        $this->total_population = null;
        $this->male = null;
        $this->female = null;
        $this->family = null;
        $this->temporary = null;
        $this->mutation = null;
    }

    public function store() {
        $validated = $this->validate();
        Population::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->population->update($validated);
    }

    public function delete() {
        $this->population->delete();
    }
}
