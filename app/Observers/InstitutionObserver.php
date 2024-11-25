<?php

namespace App\Observers;

use App\Models\Institution;
use Illuminate\Support\Facades\Cache;

class InstitutionObserver
{
    /**
     * Handle the Institution "created" event.
     */
    public function created(Institution $institution): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the Institution "updated" event.
     */
    public function updated(Institution $institution): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the Institution "deleted" event.
     */
    public function deleted(Institution $institution): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the Institution "restored" event.
     */
    public function restored(Institution $institution): void
    {
        //
    }

    /**
     * Handle the Institution "force deleted" event.
     */
    public function forceDeleted(Institution $institution): void
    {
        //
    }
}
