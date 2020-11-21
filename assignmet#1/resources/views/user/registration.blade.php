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
