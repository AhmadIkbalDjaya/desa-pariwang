<?php

namespace App\Models;

use App\Observers\ArticleObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    /**
     * accesor for image url
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        return $this->image ? url("storage/$this->image") : "images/default-article.webp";
    }
}
