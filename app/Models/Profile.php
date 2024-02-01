<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function village_status() {
        return $this->belongsTo(VillageStatus::class);
    }
}
