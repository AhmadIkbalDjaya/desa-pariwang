<?php

namespace App\Models;

use App\Observers\LocationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([LocationObserver::class])]
class Location extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
}
