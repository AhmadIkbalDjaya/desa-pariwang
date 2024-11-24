<?php

namespace App\Observers;

use App\Models\Bumdes;
use Illuminate\Support\Facades\Cache;

class BumdesObserver
{
    /**
     * Handle the Bumdes "created" event.
     */
    public function created(Bumdes $bumdes): void
    {
        Cache::forget('home-bumdeses');
    }

    /**
     * Handle the Bumdes "updated" event.
     */
    public function updated(Bumdes $bumdes): void
    {
        Cache::forget('home-bumdeses');
    }

    /**
     * Handle the Bumdes "deleted" event.
     */
    public function deleted(Bumdes $bumdes): void
    {
        Cache::forget('home-bumdeses');
    }

    /**
     * Handle the Bumdes "restored" event.
     */
    public function restored(Bumdes $bumdes): void
    {
        //
    }

    /**
     * Handle the Bumdes "force deleted" event.
     */
    public function forceDeleted(Bumdes $bumdes): void
    {
        //
    }
}
