<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VillageStatus extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    /**
     * Get all of the profiles for the VillageStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profiles(): HasMany
    {
        return $this->hasMany(Profile::class, 'village_status_id', 'id');
    }
}
