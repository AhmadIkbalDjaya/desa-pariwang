<?php

namespace App\Observers;

use App\Models\InstitutionMember;
use Illuminate\Support\Facades\Cache;

class InstitutionMemberObserver
{
    /**
     * Handle the InstitutionMember "created" event.
     */
    public function created(InstitutionMember $institutionMember): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the InstitutionMember "updated" event.
     */
    public function updated(InstitutionMember $institutionMember): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the InstitutionMember "deleted" event.
     */
    public function deleted(InstitutionMember $institutionMember): void
    {
        Cache::forget("institution-institutions");
    }

    /**
     * Handle the InstitutionMember "restored" event.
     */
    public function restored(InstitutionMember $institutionMember): void
    {
        //
    }

    /**
     * Handle the InstitutionMember "force deleted" event.
     */
    public function forceDeleted(InstitutionMember $institutionMember): void
    {
        //
    }
}
