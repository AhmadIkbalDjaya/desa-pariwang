<?php

namespace App\Models;

use App\Observers\MarkerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([MarkerObserver::class])]
class Marker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getImageUrlAttribute(): string
    {
        return ($this->image && Storage::exists($this->image)) ? "storage/$this->image" : "images/map.webp";
    }
}
