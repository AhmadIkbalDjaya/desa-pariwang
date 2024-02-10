<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Complaint;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ComplaintForm extends Form
{
    public ?Complaint $complaint;
    #[Validate("required|string")]
    public $name;
    #[Validate("nullable|string")]
    public $email;
    #[Validate("nullable|string")]
    public $phone;
    #[Validate("nullable|string")]
    public $institute;
    #[Validate("required|string")]
    public $description;

    public function setComplaint(Complaint $complaint) {
        $this->complaint = $complaint;
        $this->name = $complaint->name;
        $this->email = $complaint->email;
        $this->phone = $complaint->phone;
        $this->institute = $complaint->institute;
        $this->description = $complaint->description;
    }
    
    public function resetCommplaint() {
        $this->complaint = null;
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->institute = null;
        $this->description = null;
        
    }

    public function store() {
        $validated = $this->validate();
        Complaint::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        $this->complaint->update($validated);
    }

    public function delete() {
        $this->complaint->delete();
    }
}
