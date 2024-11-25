<?php

namespace App\Observers;

use App\Models\VillageAparatus;
use Illuminate\Support\Facades\Cache;

class VillageAparatusObserver
{
    /**
     * Handle the VillageAparatus "created" event.
     */
    public function created(VillageAparatus $villageAparatus): void
    {
        Cache::forget('about-village_aparatus');
    }

    /**
     * Handle the VillageAparatus "updated" event.
     */
    public function updated(VillageAparatus $villageAparatus): void
    {
        Cache::forget('about-village_aparatus');
    }

    /**
     * Handle the VillageAparatus "deleted" event.
     */
    public function deleted(VillageAparatus $villageAparatus): void
    {
        Cache::forget('about-village_aparatus');
    }

    /**
     * Handle the VillageAparatus "restored" event.
     */
    public function restored(VillageAparatus $villageAparatus): void
    {
        //
    }

    /**
     * Handle the VillageAparatus "force deleted" event.
     */
    public function forceDeleted(VillageAparatus $villageAparatus): void
    {
        //
    }
}
