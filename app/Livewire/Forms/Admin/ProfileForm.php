<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Profile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProfileForm extends Form
{
    public ?Profile $profile;
    #[Validate]
    public $name;

    #[Validate]
    public $description;

    #[Validate]
    public $potency;

    #[Validate]
    public $contact;

    #[Validate]
    public $email;

    #[Validate]
    public $village_status_id;

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "description" => "required|string",
            "potency" => "required|string",
            "contact" => "required|string",
            "email" => "required|email",
            "village_status_id" => "required|exists:village_statuses,id",
        ];
    }


    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;
        $this->name = $profile->name;
        $this->description = $profile->description;
        $this->potency = $profile->potency;
        $this->contact = $profile->contact;
        $this->email = $profile->email;
        $this->village_status_id = $profile->village_status_id;
    }

    public function store()
    {
        $validated = $this->validate();
        Profile::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        $this->profile->update($validated);
    }

    public function delete()
    {
        $this->profile->delete();
    }
}
