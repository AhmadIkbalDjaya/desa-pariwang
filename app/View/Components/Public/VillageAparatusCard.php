<?php

namespace App\View\Components\public;

use App\Models\VillageAparatus;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VillageAparatusCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public VillageAparatus $villageAparatus)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.village-aparatus-card');
    }
}
