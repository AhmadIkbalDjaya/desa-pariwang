<?php

namespace App\Models;

use App\Observers\VillageAparatusObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([VillageAparatusObserver::class])]
class VillageAparatus extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    /**
     * Get the villageAparatus photo with url
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function photo(): Attribute
    {
        return Attribute::make(
            get: function (?string $value): string {
                return $value ? "storage/$value" : ($this->gender == "male" ? "images/user_male.webp" : "images/user_female.webp");
            }
        );
    }
}
