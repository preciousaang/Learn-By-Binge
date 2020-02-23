@extends('layouts.base')
@section('content')
    <div class="row align-center">
        <div class="col col-4">
            <form action="{{route('login-user')}}" method="post">
                @csrf
                <fieldset>
                    <legend>
                        <h3>Login</h3>
                    </legend>
                    @if(session()->has('error'))
                        <div class="message error" data-component="message"> {{session()->get('error')}}  <span class="close small"></span></div>
                    @endif
                    <div class="form-item">
                        <label>Username</label>
                        <input type="text" name="username" value="{{old('username')}}">
                    </div>
                    <div class="form-item">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="form-item">
                        <button class="button secondary outline" type="submit">Login</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
