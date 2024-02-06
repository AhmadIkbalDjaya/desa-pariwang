<?php

namespace App\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('components.layouts.admin')]
    public Article $article;
    public function render()
    {
        return view('livewire.admin.article.show')->title("Detail Berita");
    }
}
