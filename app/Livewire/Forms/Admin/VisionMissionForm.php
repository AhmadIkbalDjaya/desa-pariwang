<?php

namespace App\Livewire\Forms\Admin;

use App\Models\VisionMission;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VisionMissionForm extends Form
{
    public ?VisionMission $visionMission;
    #[Validate("required|string")]
    public $content;
    #[Validate("nullable|boolean")]
    public $is_visi;

    public function setVisionMission(VisionMission $visionMission) {
        $this->visionMission = $visionMission;
        $this->content = $visionMission->content;
        $this->is_visi = $visionMission->is_visi;
    }

    public function resetVisionMission() {
        $this->visionMission = null;
        $this->content = null;
        $this->is_visi = null;
    }

    public function store() {
        $validated = $this->validate();
        $validated['is_visi'] = false;
        VisionMission::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->visionMission->update($validated);
    }

    public function delete() {
        $this->visionMission->delete();
    }
}
