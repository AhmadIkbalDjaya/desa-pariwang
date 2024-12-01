<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Hamlet;
use Livewire\Attributes\Validate;
use Livewire\Form;

class HamletForm extends Form
{
    public ?Hamlet $hamlet;
    #[Validate]
    public $name;
    #[Validate]
    public $chief;
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "chief" => "required|string",
        ];
    }

    public function setHamlet(Hamlet $hamlet)
    {
        $this->hamlet = $hamlet;
        $this->name = $hamlet->name;
        $this->chief = $hamlet->chief;
    }

    public function resetHamlet()
    {
        $this->reset();
    }

    public function store()
    {
        $validated = $this->validate();
        Hamlet::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        $this->hamlet->update($validated);
    }

    public function delete()
    {
        $this->hamlet->delete();
    }
}
