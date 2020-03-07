<ul class="list-group">
    <li class="list-item"><a href="{{route('courses')}}">My Courses
            @if(auth()->user()->has('courses')) ({{(auth()->user()->courses()->count())}}) @endif</a></li>
    <li class="list-item"><a href="{{route('create-course')}}">Add A New Course</a></li>
</ul>
