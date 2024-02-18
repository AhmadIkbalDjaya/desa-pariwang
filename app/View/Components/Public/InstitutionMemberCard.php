<?php

namespace App\View\Components\Public;

use App\Models\InstitutionMember;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InstitutionMemberCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public InstitutionMember $member)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.institution-member-card');
    }
}
