<?php

namespace App\Livewire\Public\Article;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.article.index',[
            "articles" => Article::orderBy('publish_date', 'DESC')->get(),
        ])->title("Berita & Kegiatan");
    }
}
