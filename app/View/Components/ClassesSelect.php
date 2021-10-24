<?php

namespace App\View\Components;

use App\Models\Classes;
use Illuminate\View\Component;

class ClassesSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $classes = Classes::all();
        return view('components.classes-select', compact('classes'));
    }
}
