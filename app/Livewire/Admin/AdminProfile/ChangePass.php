<?php

namespace App\Livewire\Admin\AdminProfile;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ChangePass extends Component
{
    #[Layout('components.layouts.admin')] 

    #[Validate("required|min:8|current_password:web")]
    public $old_password;
    #[Validate("required|min:8")]
    public $new_password;
    #[Validate("required_with:new_password|same:new_password|min:8")]
    public $new_password_confirmation;
    public $breadcrumbs = [
        [
            "name" => "Admin Profil",
            "route" => "",
        ],
        [
            "name" => "Ganti Password",
            "route" => "",
        ],
    ];
    public function render()
    {
        return view('livewire.admin.admin-profile.change-pass')->title("Ganti Password");
    }

    public function changePass() {
        $user = auth()->user();
        $validated = $this->validate();
        // if (!Hash::check($validated["old_password"], $user->password)) {
        //     // throw new ValidationException("Password Lama Salah");
        //     throw ValidationException::withMessages([
        //         "old_password" => "Password Lama Salah",
        //     ]);
             
        //     // flash('Password Gagal Diubah', 'danger');
        //     // $this->dispatch('show-notif');
        // } else {
            // }
            $user->update(["password" => Hash::make($validated["new_password"])]);
            flash('Password Berhasil Diubah', 'success');
            $this->dispatch('show-notif');
    }
}
