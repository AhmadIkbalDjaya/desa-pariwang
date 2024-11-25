<?php

namespace App\Models;

use App\Observers\HamletObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([HamletObserver::class])]
class Hamlet extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
}
