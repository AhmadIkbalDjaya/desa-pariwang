<?php

namespace App\Livewire\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.admin.components.header');
    }

    public function logout() {
        Auth::logout();
        $this->redirectRoute('login', navigate: true);
    }
}
