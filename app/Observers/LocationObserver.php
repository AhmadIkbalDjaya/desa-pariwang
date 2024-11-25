<?php

namespace App\Observers;

use App\Models\Location;
use Cache;

class LocationObserver
{
    /**
     * Handle the Location "created" event.
     */
    public function created(Location $location): void
    {
        //
    }

    /**
     * Handle the Location "updated" event.
     */
    public function updated(Location $location): void
    {
        Cache::forget("footer-location");
        Cache::forget("home-location");
        Cache::forget("about-location");
    }

    /**
     * Handle the Location "deleted" event.
     */
    public function deleted(Location $location): void
    {
        //
    }

    /**
     * Handle the Location "restored" event.
     */
    public function restored(Location $location): void
    {
        //
    }

    /**
     * Handle the Location "force deleted" event.
     */
    public function forceDeleted(Location $location): void
    {
        //
    }
}
