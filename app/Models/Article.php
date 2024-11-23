<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
