@extends('layouts.base')
@section('title', 'Login Student')
@section('content')
    <div class="row align-center">
        <div class="col col-4">
            <form action="{{route('login-student')}}" method="post">
                @csrf
                <fieldset>
                    <legend>
                        <h4>Student Login</h4>
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
                        <button class="button secondary outline" type="submit">Login <i class="fa fa-sign-in"></i></button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
