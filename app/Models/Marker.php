<?php

namespace App\Models;

use App\Observers\MarkerObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([MarkerObserver::class])]
class Marker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
}
