<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\Forms\Admin\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin')]
    public ArticleForm $form;
    public Article $article;
    public function mount() {
        $this->form->setArticle($this->article);
    }
    public function render()
    {
        return view('livewire.admin.article.show')->title("Detail Berita");
    }

    public function destroy() {
        $this->form->delete();
        flash('Berita Berhasil Dihapus', 'danger');   
        $this->redirectRoute('admin.article.index', navigate: true);
        $this->dispatch('show-notif');
        $this->dispatch("close-modal");
    }
}
