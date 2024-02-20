<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Profile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    public ?Profile $profile;
    #[Validate("required|string")]
    public $name;
    #[Validate("required|string")]
    public $description;
    #[Validate("required|string")]
    public $potency;
    #[Validate("required|numeric")]
    public $population;
    #[Validate("required|string")]
    public $contact;
    #[Validate("required|email")]
    public $email;
    #[Validate("required|exists:id,village_statuses")]
    public $village_status_id;

    public function setProfile(Profile $profile) {
        $this->profile = $profile;
        $this->name = $profile->name;
        $this->description = $profile->description;
        $this->potency = $profile->potency;
        $this->population = $profile->population;
        $this->contact = $profile->contact;
        $this->email = $profile->email;
        $this->village_status_id = $profile->village_status_id;
    }

    public function store() {
        $validated = $this->validate();
        Profile::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->profile->update($validated);
    }

    public function delete() {
        $this->profile->delete();
    }
}
