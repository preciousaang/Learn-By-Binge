<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class RegisterController extends Controller
{

    public function __construct(){
        $this->middleware('guest:student');
    }

    public function form(){
        return view('students.register');
    }

    public function register(Request $request){
        $newStudent = Student::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email')
        ]);
        if($newStudent){
            return redirect()->route('student-login')->with('success', 'Registration Successful! Login.');
        }
    }
}
