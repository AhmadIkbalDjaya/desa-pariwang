<?php

namespace App\Livewire\Forms\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate]
    public $username;

    #[Validate]
    public $password;

    public function rules(): array
    {
        return [
            "username" => "required",
            "password" => "required|min:8",
        ];
    }

    public function login() {
        $validated = $this->validate();
        if (Auth::attempt($validated)) {
            return true;
        } else{
            return false;
        }
    }
}
