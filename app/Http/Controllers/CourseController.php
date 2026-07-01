<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function id(){
        $courses = Course::all();
        return view('courses.list', ['courses' => $courses]);
    }
}
