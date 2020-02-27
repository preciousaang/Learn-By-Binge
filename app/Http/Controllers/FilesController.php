<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\File;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\FileRequest;
use Carbon\Carbon;

class FilesController extends Controller
{
    public function list(Request $request){
        $course =Course::findOrFail($request->id);
        $files = $course->files;

        return view('files.tutors.list', [
            'files'=>$files,
            'course'=>$course,
        ]);
    }

    public function create(Request $request){
        $course =Course::findOrFail($request->id);
        return view('files.tutors.create', [
            'course' => $course,
        ]);
    }

    public function store(FileRequest $request){
        $course =Course::findOrFail($request->id);
        $type = $_FILES['src']['type'];
        $newCourse = $course->files()->create([
            'name'=>$request->input('name'),
            'src'=>basename($request->file('src')->store('public/course-files')),
            'type'=>$type
        ]);
        return redirect()->route('tutor-course-files', $course->id);
    }
}
