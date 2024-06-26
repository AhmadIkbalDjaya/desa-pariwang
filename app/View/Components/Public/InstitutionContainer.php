<?php

namespace App\View\Components\Public;

use App\Models\Institution;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InstitutionContainer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Institution $institution)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public.institution-container');
    }
}
