<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\Admin\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components.layouts.auth')]
    public LoginForm $form;
    public function render()
    {
        return view('livewire.admin.login')->title('Login Pariwang');
    }

    public function login() {
        $login = $this->form->login();
        if ($login) {
            return $this->redirectRoute('admin.index', navigate: false);
        } else{
            $this->form->reset();
            flash("Username / Password Salah", "danger");
            $this->dispatch("show-notif");
        }
    }
}
