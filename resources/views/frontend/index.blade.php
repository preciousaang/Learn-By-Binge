@extends('layouts.base')
@section('content')

<div class="main">
    <div class="row gutters">
        <div class="col col-12">
            <h3 style="margin-top: 10px; text-shadow: 3px 3px 0 #ccc;" class="title text-center">Latest Courses</h3><hr>
            <div class="row gutters auto around">
                @forelse ($courses::latest()->first()->limit(30)->get() as $course)
                    <div class="col col-3">
                        <div style="marigin: 0 auto; border-radius: 1em 1em 0 0; box-shadow: 3px 5px 2px #ccc; margin-top: 10px; width: 90%; border: 1px solid #ccc; padding: 10px;">
                            <figure>
                                <figcaption style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 10px;">
                                    <span class="label focus"><a href="#">{{$course->category->title}}</a></span>
                                    <span class="label black custom">{{__('$').$course->price}}</span>
                                </figcaption>

                                <img style="border-radius: 5px;" src="{{asset(config('paths.course_images').$course->image)}}">
                                <figcaption>
                                    <h5 class="text-center title">{{$course->title}}</h5>
                                    <p class="text-center small">{{$course->created_at->diffForHumans()}}</p>
                                    <hr>
                                    <p class="text-center">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </p>

                                    <hr>
                                </figcaption>
                                <figcaption>
                                    {{substr($course->description, 0, 100).__('...')}}
                                </figcaption>
                                <figcaption>
                                <button course="{'id': {{$course->id}}, 'title': '{{$course->title}}', 'price': '{{$course->price}}'}" id="{{$course->id}}" style="box-shadow: 3px 1px 0 #ccc;" class="course button w100 secondary outline"><i class="fa fa-cart-plus"></i>&nbsp; Add To Cart</button>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                @empty
                    No courses yet
                @endforelse
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
$(document).ready(function(){
    $('.course').click(function(){
        $.post('{{route('add-to-cart')}}', {
            'id': $(this).attr('id'),
            '_token': '{{csrf_token()}}'
        }, function(data, status){
            clearCart();
            loadCart();
        });
    });
});
</script>
@endsection
