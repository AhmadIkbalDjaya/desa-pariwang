<?php

namespace App\Observers;

use App\Models\Marker;
use Illuminate\Support\Facades\Cache;

class MarkerObserver
{
    /**
     * Handle the Marker "created" event.
     */
    public function created(Marker $marker): void
    {
        Cache::forget('home-markers');
        Cache::forget('about-markers');
    }
    
    /**
     * Handle the Marker "updated" event.
     */
    public function updated(Marker $marker): void
    {
        Cache::forget('home-markers');
        Cache::forget('about-markers');
    }
    
    /**
     * Handle the Marker "deleted" event.
     */
    public function deleted(Marker $marker): void
    {
        Cache::forget('home-markers');
        Cache::forget('about-markers');
    }

    /**
     * Handle the Marker "restored" event.
     */
    public function restored(Marker $marker): void
    {
        //
    }

    /**
     * Handle the Marker "force deleted" event.
     */
    public function forceDeleted(Marker $marker): void
    {
        //
    }
}
