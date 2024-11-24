<?php

namespace App\Models;

use App\Observers\BumdesObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([BumdesObserver::class])]
class Bumdes extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
}
