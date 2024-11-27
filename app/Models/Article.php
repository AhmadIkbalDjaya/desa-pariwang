<?php

namespace App\Models;

use App\Observers\ArticleObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
     * Get the article image with url
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? "storage/$value" : "images/default-article.webp"
        );
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
}
