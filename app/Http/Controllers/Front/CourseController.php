<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function single($course){
        $course = Course::where('slug', $course)->first();

        return view('front.courses.single', [
            "course" => $course
        ]);
    }
}
