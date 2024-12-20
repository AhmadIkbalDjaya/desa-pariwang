<?php

namespace App\Models;

use App\Observers\InstitutionObserver;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([InstitutionObserver::class])]
class Institution extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ["id"];

    public function sluggable(): array
    {
        return [
            "slug" => [
                "source" => "name",
            ],
        ];
    }

    /**
     * Get all of the members for the Institution
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members(): HasMany
    {
        return $this->hasMany(InstitutionMember::class, 'institution_id', 'id');
    }
}
