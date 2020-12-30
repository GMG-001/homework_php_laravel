@extends('layout.layout')
@section('content')
    <div class="bg-gray-800  text-white mx-64">
        <div class="cox-header with-border">
            <h3 class="box-title mx-32">create post</h3>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{route('post.save')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Post title</label>
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="title" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post text</label>
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="text" name="text">
                </div>
                <div class="form-group">
                    <input type="file" multiple class="bg-gray-700 rounded-full w-64 px-4 py-1" name="image">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary mx-32">დამატება</button>
            </div>
        </form>
    </div>
@endsection
