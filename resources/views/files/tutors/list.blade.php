@extends('layouts.base')
@section('content')
    <div class="main">
        <div class="row gutters">
            <div class="col col-4">
                @include('layouts.admin-sidebar')
            </div>
            <div class="col col-8">
                <fieldset>
                    <legend><h4>{{$course->title}} - Files</h4></legend>
                    <a class="button secondary" href="{{route('create-course-file', $course->id)}}"><i class="fa fa-plus"></i>&nbsp;Add File</a>

                    <table class="striped bordered">
                        <thead>
                            <tr>
                                <th class="w30">Name</th>
                                <th class="w10">Size</th>
                                <th class="w20">Date Created</th>
                                <th class="w30">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($files as $file)
                                <tr>
                                    <td>{{strtoupper($file->name)}}</td>
                                    <td>{{__("TODO")}}</td>
                                    <td>{{$file->created_at->diffForHumans()}}</td>
                                    <td>
                                        <button data-target="#my-dropdown" data-component="dropdown" class="button outline secondary">Select Action <span class="caret down"></span></button>
                                        <div id="my-dropdown" class="dropdown hide">
                                            <ul>
                                                <li><a href="">View File</a></li>
                                                <li><a href="">Update Course</a></li>
                                                <li><a href="">Delete Course</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
