<?php

namespace App\Observers;

use App\Models\Population;
use Illuminate\Support\Facades\Cache;

class PopulationObserver
{
    /**
     * Handle the Population "created" event.
     */
    public function created(Population $population): void
    {
        Cache::forget('home-population');
    }

    /**
     * Handle the Population "updated" event.
     */
    public function updated(Population $population): void
    {
        Cache::forget('home-population');
    }

    /**
     * Handle the Population "deleted" event.
     */
    public function deleted(Population $population): void
    {
        Cache::forget('home-population');
    }

    /**
     * Handle the Population "restored" event.
     */
    public function restored(Population $population): void
    {
        //
    }

    /**
     * Handle the Population "force deleted" event.
     */
    public function forceDeleted(Population $population): void
    {
        //
    }
}
