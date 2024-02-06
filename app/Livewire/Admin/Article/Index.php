<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\Forms\Admin\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('components.layouts.admin')] 

    public $perpage = 10;
    public $search = "";
    public ArticleForm $form;
    public function render()
    {
        $search = $this->search;
        $articles = Article::where("title", "LIKE", "%$search%")->latest()->paginate($this->perpage);
        return view('livewire.admin.article.index', [
            "articles" => $articles,
        ])->title("Berita");
    }

    public function setArticle (Article $article) {
        $this->form->setArticle($article);
    }

    public function destroy() {
        $this->form->delete();
        flash("Berita Berhasil DiHapus", "danger");
        $this->dispatch("show-notif");
        $this->dispatch("close-modal");
    }
}
