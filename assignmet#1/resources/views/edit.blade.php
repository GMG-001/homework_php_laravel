@extends('layout.layout')
@section('content')
    <div class="box box-primary border-b border-gray-800 bg-gray-900 text-white my-8">
        <div class="cox-header with-border">
            <h3 class="box-title mx-64 text-gray-500">edit post</h3>
        </div>
        <form class="mx-20" method="post" enctype="multipart/form-data" action="{{route('post.update', $post->id)}}">
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" placeholder="title" value="{{old('title', $post->title)}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Post text</label>
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1" placeholder="text" value="{{old('text', $post->text)}}">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn bg-gray-800 mx-40">Save</button>
            </div>
        </form>
    </div>
    <div class="bg-gray-800  text-white">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="https://laravel.com/docs" class="underline text-white dark:text-white">
                            {{$post->title}}
                        </a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-orange-300 dark:text-gray-400 text-sm">
                        {{$post->text}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
