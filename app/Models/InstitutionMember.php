<?php

namespace App\Models;

use App\Enums\Gender;
use App\Observers\InstitutionMemberObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

#[ObservedBy([InstitutionMemberObserver::class])]
class InstitutionMember extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    protected $casts = [
        "gender" => Gender::class,
    ];

    /**
     * Get the institution that owns the InstitutionMember
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class, 'institution_id', 'id');
    }

    public function getPhotoUrlAttribute(): string
    {
        return ($this->photo && Storage::exists($this->photo)) ? "storage/$this->photo" : ($this->gender == Gender::Male ? "images/user_male.webp" : "images/user_female.webp");
    }
}
