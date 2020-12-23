@extends('layout.layout')
@section('content')
    <div class="bg-gray-800  text-white mx-64">
        <form method="post" enctype="multipart/form-data" action="{{route('send.mail')}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="bg-gray-700 rounded-full w-64 px-4 py-1" placeholder="email" name="mail">
                </div>
            </div>
            <input type="hidden" name="_token" id="csrf_token" value="{{csrf_token()}}">
            <div class="box-footer">
                <button type="submit" class="btn btn-primary mx-32">send</button>
            </div>
        </form>
    </div>
@endsection
