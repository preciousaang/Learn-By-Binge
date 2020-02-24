<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

use App\Category;
use App\Course;

class CoursesController extends Controller
{
    public function create(){
        $categories = Category::orderBy('title', 'asc')->get();
        return view('courses.create', [
            'categories'=>$categories,
        ]);
    }

    public function store(CourseRequest $request){
        $imgPath = basename($request->file('image')->store('public/course_images'));
        $newCourse = Course::create([
            'title'=>$request->input('title'),
            'category_id'=>$request->input('category'),
            'description'=>$request->input('description'),
            'image'=>$imgPath,
            'price'=>$request->input('price'),
            'user_id'=>auth()->user()->id
        ]);
        if($newCourse){
            return redirect()->route('create-course')->with('success', 'Course Added Successfully!');
        }

    }

    public function index(){
        $courses = auth()->user()->courses()->orderBy('created_at', 'desc')->paginate(30);
        return view('courses.index', [
            'courses'=>$courses,
        ]);
    }
}
