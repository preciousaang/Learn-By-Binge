@extends('layouts.base')
@section('title', 'Add File to course')
@section('content')
    <div class="main">
        <div class="row gutters">
            <div style="" class="col col-4">
                @include('layouts.admin-sidebar')
            </div>
            <div class="col col-8">
                <fieldset>
                    <legend><h4>Add A File to: {{$course->title}}</h4></legend>
                    @if($errors->any())
                        <div class="message error">Please Fix The Following Errors <span class="close small"></span></div>
                    @endif
                    <form class="form" action="{{route('store-course-file', $course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-item">
                            <label>File Name @if($errors->has('name')) <span class="error">@foreach($errors->get('name') as $message){{$message}} @endforeach</span> @endif</label>
                            <input type="text" @if($errors->has('name')) class="error" @endif name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-item">
                            <label>File @if($errors->has('src')) <span class="error">@foreach($errors->get('src') as $message){{$message}} @endforeach @endif</label>
                            <input type="file" name="src">
                        </div>
                        <div class="form-item">
                            <button class="button secondary outline" type="submit">Add File To course</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
