<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:student')->except(['logout']);
    }

    public function form(){
        return view('students.login');
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if(Auth::guard('student')->attempt($credentials)){
            return redirect()->intended(route('student-dashboard'));
        }else{
            return redirect()->back()->with('error', 'Username/Password Combo Incorrect');
        }
    }

    public function logout(){
        Auth::guard('student')->logout();
        return redirect()->route('student-login');
    }
}
