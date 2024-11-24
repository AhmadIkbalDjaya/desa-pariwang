<?php

namespace App\Livewire\Public\Article;

use App\Models\Article;
use Livewire\Component;

class Show extends Component
{
    public Article $article;
    public function render()
    {
        return view('livewire.public.article.show')->title($this->article->title);
    }
}
