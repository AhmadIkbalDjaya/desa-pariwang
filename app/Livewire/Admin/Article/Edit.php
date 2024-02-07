<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\Forms\Admin\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.admin')]
    public Article $article;
    public ArticleForm $form;
    public function mount(Article $article) {
        $this->form->setArticle($article);
    }

    public function render()
    {
        return view('livewire.admin.article.edit');
    }

    public function update() {
        $this->form->update();
        $this->redirectRoute('admin.article.index', navigate: true);
        flash("Berita Berhasil Diedit", "success");
        $this->dispatch("show-notif");
    }
}