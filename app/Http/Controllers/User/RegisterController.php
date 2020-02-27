<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use App\Events\UserRegistered;

class RegisterController extends Controller
{
    public function form(){
        return view('users.register');
    }

    public function register(UserRequest $request){
        $newUser = User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'first_name' => $request->input('first_name'),
            'role_id'=>3,
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email')
        ]);
        if($newUser){
            event(new UserRegistered($newUser));
            return redirect()->route('login')->with('success', 'Registration Successful! Login.');
        }
    }
}
