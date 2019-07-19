
@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}
    <link rel="stylesheet" href="{{asset('vendor/juxtapose/css/juxtapose.css')}}">
    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }

        .juxtapose {
            max-width: 1200px;
        }
        .jx-slider {
            margin-top: 1em;
        }
    </style>


@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <div class="container">

        <!-- Heading Row -->
        <div class="row align-items-center my-5">


                <div class="juxtapose">
                    <img class="left" src="{{ asset($postB->file) }}" data-label="Original" alt="{{$postB->name}}" data-credit="" style="max-height: 600px"/>
                    <img class="right" src="{{ asset($postA->file) }}" data-label="Actual" alt="{{$postA->name}}" data-credit="" style="max-height: 600px"/>
                </div>



        </div>

    </div>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script src="{{asset('vendor/juxtapose/js/juxtapose.js')}}"></script>

@endsection








