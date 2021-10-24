<?php

namespace App\View\Components;

use App\Models\Material;
use Illuminate\View\Component;

class MaterialSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $materials = Material::all();
        return view('components.material-select', [
            "materials" => $materials
        ]);
    }
}
