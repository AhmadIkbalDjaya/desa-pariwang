<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Complaint;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ComplaintForm extends Form
{
    public ?Complaint $complaint;
    #[Validate]
    public ?string $name;
    #[Validate]
    public ?string $email;
    #[Validate]
    public ?string $phone;
    #[Validate]
    public ?string $institute;
    #[Validate]
    public ?string $description;
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
