<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageStatus extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function Profiles() {
        return $this->hasMany(Profile::class);
    }
}
