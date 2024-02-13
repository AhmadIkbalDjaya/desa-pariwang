<?php

namespace App\Livewire\Public\Article;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.public.article.index')->title("Berita & Kegiatan");
    }
}
