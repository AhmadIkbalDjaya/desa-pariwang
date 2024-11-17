<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    /**
     * Get the village_status that owns the Profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function village_status(): BelongsTo
    {
        return $this->belongsTo(VillageStatus::class, 'village_status_id', 'id');
    }
}
