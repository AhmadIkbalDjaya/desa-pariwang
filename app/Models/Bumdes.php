<?php

namespace App\Models;

use App\Observers\BumdesObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([BumdesObserver::class])]
class Bumdes extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function getImageUrlAttribute(): string
    {
        return ($this->image && Storage::exists($this->image)) ? "storage/$this->image" : "images/bumdes-icon2.webp";
    }
}
