<?php

namespace App\Observers;

use App\Models\Hamlet;
use Illuminate\Support\Facades\Cache;

class HamletObserver
{
    /**
     * Handle the Hamlet "created" event.
     */
    public function created(Hamlet $hamlet): void
    {
        Cache::forget("about-hamlets");
    }
    
    /**
     * Handle the Hamlet "updated" event.
     */
    public function updated(Hamlet $hamlet): void
    {
        Cache::forget("about-hamlets");
    }

    /**
     * Handle the Hamlet "deleted" event.
     */
    public function deleted(Hamlet $hamlet): void
    {
        Cache::forget("about-hamlets");
    }

    /**
     * Handle the Hamlet "restored" event.
     */
    public function restored(Hamlet $hamlet): void
    {
        //
    }

    /**
     * Handle the Hamlet "force deleted" event.
     */
    public function forceDeleted(Hamlet $hamlet): void
    {
        //
    }
}
