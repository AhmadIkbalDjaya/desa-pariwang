<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Facades\Cache;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
        Cache::forget('home-articles');
        Cache::forget('article-articles');
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        Cache::forget('home-articles');
        Cache::forget('article-articles');
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        Cache::forget('home-articles');
        Cache::forget('article-articles');
    }

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
