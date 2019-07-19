
@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}


    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }


    </style>


@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{asset($user->profile->file)}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                <h2>{{ $user->name }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/admin/profile" method="POST">
                    <label for="file">Update image</label>
                    <input type="file" name="file" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="btn btn-sm btn-primary float-right">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

            </div>
        </div>
    </div>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection


