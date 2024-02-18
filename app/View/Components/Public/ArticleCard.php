<?php

namespace App\View\Components\Public;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public bool $responsive = false, 
        public Article $article,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.article-card');
    }
}
