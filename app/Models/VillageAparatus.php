<?php

namespace App\Models;

use App\Observers\VillageAparatusObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([VillageAparatusObserver::class])]
class VillageAparatus extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
}
