<?php

namespace App\View\Components;

use App\Models\Teacher;
use Illuminate\View\Component;

class TeacherSelect extends Component
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
        $teachers = Teacher::all();
        return view('components.teacher-select', [
            'teachers' => $teachers
        ]);
    }
}
