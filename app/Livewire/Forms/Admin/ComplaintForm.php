<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Complaint;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ComplaintForm extends Form
{
    public ?Complaint $complaint = null;
    #[Validate]
    public ?string $name = null;
    #[Validate]
    public ?string $email = null;
    #[Validate]
    public ?string $phone = null;
    #[Validate]
    public ?string $institute = null;
    #[Validate]
    public ?string $description = null;
    public function rules(): array
    {
        return [
            "name" => "required|string",
            "email" => "nullable|string",
            "phone" => "nullable|phone:ID",
            "institute" => "nullable|string",
            "description" => "required|string",
        ];
    }

    public function setComplaint(Complaint $complaint)
    {
        $this->complaint = $complaint;
        $this->name = $complaint->name;
        $this->email = $complaint->email;
        $this->phone = $complaint->phone;
        $this->institute = $complaint->institute;
        $this->description = $complaint->description;
    }

    public function resetCommplaint()
    {
        $this->reset("complaint", "name", "email", "phone", "institute", "description");
    }

    public function store()
    {
        $validated = $this->validate();
        Complaint::create($validated);
        $this->reset();
        session()->flash("success", "Masukan Berhasil Dikirim");
    }

    public function update()
    {
        $validated = $this->validate();
        $this->complaint->update($validated);
    }

    public function delete()
    {
        $this->complaint->delete();
    }
}
