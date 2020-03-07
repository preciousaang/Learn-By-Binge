@extends('layouts.base')
@section('title', 'Add Course')
@section('content')
    <div class="main">
        <div class="row gutters">
            <div style="" class="col col-4">
                @include('layouts.admin-sidebar')
            </div>
            <div class="col col-8">
                <fieldset>
                    <legend><h4>Add A Course</h4></legend>
                    @if($errors->any())
                        <div class="message error">Please Fix The Following Errors <span class="close small"></span></div>
                    @endif
                    <form class="form" action="{{route('store-course')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-item">
                            <label>Category @if($errors->has('category')) <span class="error">@foreach($errors->get('category') as $message){{$message}} @endforeach @endif</label>
                            <select name="category"  @if($errors->has('category')) class="error" @endif>
                                <option value="">Select A Category</option>
                                @forelse($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-item">
                            <label>Course Title @if($errors->has('title')) <span class="error">@foreach($errors->get('title') as $message){{$message}} @endforeach</span> @endif</label>
                            <input type="text" @if($errors->has('title')) class="error" @endif name="title" value="{{old('title')}}">
                        </div>
                        <div class="form-item">
                            <label>Course Price(in Dollars) @if($errors->has('price')) <span class="error">@foreach($errors->get('price') as $message){{$message}} @endforeach</span> @endif</label>
                            <input type="text" @if($errors->has('price')) class="error" @endif name="price" value="{{old('price')}}">
                        </div>
                        <div class="form-item">
                            <label>Description @if($errors->has('description')) <span class="error">@foreach($errors->get('description') as $message) {{$message}} @endforeach @endif</label>
                            <textarea style="resize: none;" name="description" @if($errors->has('description')) class="error" @endif rows="12">{{old('description')}}</textarea>
                        </div>
                        <div class="form-item">
                            <label>Image @if($errors->has('image')) <span class="error">@foreach($errors->get('image') as $message){{$message}} @endforeach @endif</label>
                            <input type="file" accept="image/*" name="image">
                        </div>
                        <div class="form-item">
                            <button class="button secondary outline" type="submit">Create Course</button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
