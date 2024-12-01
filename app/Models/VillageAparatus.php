<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\Religion;
use App\Observers\VillageAparatusObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([VillageAparatusObserver::class])]
class VillageAparatus extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    protected $casts = [
        "gender" => Gender::class,
        "religion" => Religion::class,
    ];

    public function getPhotoUrlAttribute(): string
    {
        return ($this->photo && Storage::exists($this->photo)) ? "storage/$this->photo" : ($this->gender == Gender::Male ? "images/user_male.webp" : "images/user_female.webp");
    }
}
