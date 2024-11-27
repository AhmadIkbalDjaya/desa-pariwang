<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Population;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PopulationForm extends Form
{
    public ?Population $population;
    #[Validate]
    public $total_population;

    #[Validate]
    public $male;

    #[Validate]
    public $female;

    #[Validate]
    public $family;

    #[Validate]
    public $temporary;

    #[Validate]
    public $mutation;

    public function rules(): array
    {
        return [
            "total_population" => "nullable|numeric|min:0",
            "male" => "nullable|numeric|min:0",
            "female" => "nullable|numeric|min:0",
            "family" => "nullable|numeric|min:0",
            "temporary" => "nullable|numeric|min:0",
            "mutation" => "nullable|numeric|min:0",
        ];
    }


    public function setPopulation(Population $population)
    {
        $this->population = $population;
        $this->total_population = $population->total_population;
        $this->male = $population->male;
        $this->female = $population->female;
        $this->family = $population->family;
        $this->temporary = $population->temporary;
        $this->mutation = $population->mutation;
    }

    public function resetPopulation()
    {
        $this->reset();
    }

    public function store()
    {
        $validated = $this->validate();
        Population::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        $this->population->update($validated);
    }

    public function delete()
    {
        $this->population->delete();
    }
}
