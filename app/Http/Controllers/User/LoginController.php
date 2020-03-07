<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['logout']);
    }
    public function form(){
        return view('users.login');
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }else{
            return redirect()->back()->with(['error'=>'Username/Password Combo Wrong'])->withInput();
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
