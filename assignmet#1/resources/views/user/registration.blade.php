{{--@extends('layout.layout')--}}
{{--@section('content')--}}
{{--    <div class="bg-gray-800  text-white mx-64">--}}
{{--        <div class="cox-header with-border">--}}
{{--            <h3 class="box-title mx-32">registration</h3>--}}
{{--        </div>--}}
{{--        <form method="GET" enctype="multipart/form-data" action="{{route('user.registration.save')}}">--}}
{{--            <div class="box-body">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">name</label>--}}
{{--                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="name" name="name">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">email</label>--}}
{{--                    <input type="email" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="email" name="email">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">password</label>--}}
{{--                    <input type="password" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="password" name="password">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">--}}
{{--            <div class="box-footer">--}}
{{--                <button type="submit" class="btn btn-primary mx-32">SING UP</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layout.layout')
<link href="/css/style.css" rel="stylesheet">
@section('content')
    <form method="GET" enctype="multipart/form-data" action="{{route('user.registration.save')}}">        @csrf
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <input type="text" placeholder="name" name="name">
            </div>
            <div class="textbox">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="textbox">
                <input type="password" placeholder="password" name="password">
            </div>
            <button class="btn" type="submit">SING UP</button>
        </div>
    </form>
@endsection
