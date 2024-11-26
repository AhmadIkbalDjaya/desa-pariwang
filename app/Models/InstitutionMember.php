<?php

namespace App\Models;

use App\Observers\InstitutionMemberObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([InstitutionMemberObserver::class])]
class InstitutionMember extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    /**
     * Get the institution that owns the InstitutionMember
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class, 'institution_id', 'id');
    }
}
