@extends('layouts.base')
@section('title', 'My Courses')
@section('content')
<div class="main">
    <div class="row gutters">
        <div class="col col-4">
            @include('layouts.admin-sidebar')
        </div>
        <div class="col col-8">
            <fieldset>
                <legend><h4>My Courses</h4></legend>
                <table class="striped bordered">
                    <thead>
                        <tr>
                            <th class="w20">Title</th>
                            <th class="w10">Category</th>
                            <th class="w10">Files</th>
                            <th class="w10">Price</th>
                            <th class="w20">Date Created</th>
                            <th class="w30">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $course)
                        <tr>
                            <td><p>{{$course->title}}</p></td>
                            <td><p>{{$course->category->title}}</p></td>
                            <td><p>{{$course->files()->count()}}</p></td>
                            <td>${{$course->price}}</td>
                            <td>{{$course->created_at->diffForHumans()}}</td>
                            <td>
                                <button data-target="#my-dropdown-{{$course->id}}" data-component="dropdown" class="button outline secondary">Select Action <span class="caret down"></span></button>
                                <div id="my-dropdown-{{$course->id}}" class="dropdown hide">
                                    <ul>
                                        <li><a href="{{route('tutor-course-files', $course->id)}}">View Course Files</a></li>
                                        <li><a href="{{route('edit-course', $course->id)}}">Update Course</a></li>
                                        <li><a href="">Delete Course</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">You have no courses</td>
                            </tr>
                        @endforelse
                        @if($courses)
                            <tr>
                                <th colspan="5">{{$courses->links()}}</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </fieldset>
        </div>
    </div>
</div>
@endsection
