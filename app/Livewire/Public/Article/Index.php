<?php

namespace App\Livewire\Public\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $articles = Cache::rememberForever("article-articles", function () {
            return Article::select("id", "title", "body", "slug", "image", "publish_date")
                ->orderBy('publish_date', 'DESC')
                ->get();
        });

        return view('livewire.public.article.index', [
            "articles" => $articles,
        ])->title("Berita & Kegiatan");
    }
}
