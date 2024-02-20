<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Hamlet;
use Livewire\Attributes\Validate;
use Livewire\Form;

class HamletForm extends Form
{
    public ?Hamlet $hamlet;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $chief;

    public function setHamlet(Hamlet $hamlet) {
        $this->hamlet = $hamlet;
        $this->name = $hamlet->name;
        $this->chief = $hamlet->chief;
    }

    public function resetHamlet() {
        $this->hamlet = null;
        $this->name = null;
        $this->chief = null;
    }

    public function store() {
        $validated = $this->validate();
        Hamlet::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->hamlet->update($validated);
    }

    public function delete() {
        $this->hamlet->delete();
    }
}
