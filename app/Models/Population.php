<?php

namespace App\Models;

use App\Observers\PopulationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([PopulationObserver::class])]
class Population extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
}
