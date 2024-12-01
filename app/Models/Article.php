<?php

namespace App\Models;

use App\Observers\ArticleObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([ArticleObserver::class])]
class Article extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ["id"];

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "title",
            ],
        ];
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            if (empty($article->publish_date)) {
                $article->publish_date = now()->toDateString();
            }
        });
    }

    public function getImageUrlAttribute(): string
    {
        return ($this->image && Storage::exists($this->image)) ? "storage/$this->image" : "images/default-article.webp";
    }
}
