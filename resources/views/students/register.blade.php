@extends('layouts.base')
@section('title', 'Student Sign Up')
@section('content')
    <div class="row align-center">
        <div class="col col-4">
            <form action="{{route('register-student')}}" method="post">
                @csrf
                <fieldset>
                    <legend>
                        <h4>Student Sign Up</h4>
                    </legend>
                    @include('partials.partials')
                    <div class="form-item">
                        <label>Username</label>
                        <input type="text" name="username" value="{{old('username')}}">
                    </div>
                    <div class="form-item">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-item">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <div class="form-item">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="{{old('first_name')}}">
                    </div>
                    <div class="form-item">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{old('last_name')}}">
                    </div>
                    <div class="form-item">
                        <label>Email</label>
                        <input type="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-item">
                        <button class="button secondary outline" type="submit">Register</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
