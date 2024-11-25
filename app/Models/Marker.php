<?php

namespace App\Models;

use App\Observers\MarkerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([MarkerObserver::class])]
class Marker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    /**
     * Get the bumdes image with url
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? "storage/$value" : "images/map.webp"
        );
    }
}
