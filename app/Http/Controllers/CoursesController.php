<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CoursesController extends Controller
{
    public function create(){
        return view('courses.create');
    }

    public function store(CourseRequest $request){

    }
}
