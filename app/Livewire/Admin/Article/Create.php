<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\Forms\Admin\ArticleForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public ArticleForm $form;
    public function render()
    {
        return view('livewire.admin.article.create')->title("Tambah Berita");
    }

    public function store() {
        $this->form->store();
        $this->redirectRoute("admin.article.index", navigate:true);
        flash("Berita Berhasil Ditambahkan", "success");
        $this->dispatch("show-notif");
    }
}
