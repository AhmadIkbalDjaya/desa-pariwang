<?php

namespace App\Livewire\Forms\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required')]
    public $username;
    #[Validate('required|min:8')]
    public $password;

    public function login() {
        $validated = $this->validate();
        if (Auth::attempt($validated)) {
            return true;
        } else{
            return false;
        }
    }
}
