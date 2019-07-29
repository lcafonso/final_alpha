@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}




    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }

        .hovereffect {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            left: 0;
            background-color: rgba(255, 255, 255, 0.7);
            top: -200px;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all 0.1s ease-out 0.5s;
            transition: all 0.1s ease-out 0.5s;
            border-radius: 2%;
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            top: 0px;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        .hovereffect img {
            display: block;
            position: relative;
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all ease-in-out 0.1s;
            transition: all ease-in-out 0.1s;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect:hover h2 {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect .dh2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all ease-in-out 0.1s;
            transition: all ease-in-out 0.1s;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect:hover .dh2 {
            -webkit-transform: translateY(25%);
            -ms-transform: translateY(25%);
            transform: translateY(25%);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect div.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            margin: 50px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            color: #000;
            border: 1px solid #000;
            -webkit-transition: all ease-in-out 0.3s;
            transition: all ease-in-out 0.3s;
        }

        .hovereffect div.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover div.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            box-shadow: 0 0 5px #000;
            color: #000;
            border: 1px solid #000;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            margin: 50px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            color: #000;
            border: 1px solid #000;
            -webkit-transition: all ease-in-out 0.3s;
            transition: all ease-in-out 0.3s;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 15px #fff;
        }

        .hovereffect:hover a.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            box-shadow: 0 0 15px #000;
            color: #000;
            border: 1px solid #000;
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2%;
        }

        .cir-responsive {
            float: left;
            width: 100%;
            height: 100%;
            max-width: 60px;
            max-height: 60px;
            object-fit: cover;
            border-radius: 50%;
            overflow: auto;
            margin-right: 10px;
            z-index: -1;

        }


    </style>


@endsection

{{--Section footer--}}

@section('content')



    <div class="row">


    @foreach($posts as $post)

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4" style="height: 300px;">

        <div class="hovereffect">
            <img src="{{asset($post->file)}}" alt="{{$post->name}}" class="responsive"/>
            <div class="overlay">
                <div class="dh2">
                    <div class="row">
                        <div class="col-md-12 offset-md-0" style="text-align: left;" >
                            <img src="{{asset($post->user->profile->file)}}" alt="{{$post->user->profile->name}}" class="cir-responsive"/>

                            {{$post->user->name}}
                            <p style="font-size: 50%;">{{$post->user->profile->country}}</p>
                            <p style="font-size: 50%;">Titulo: {{$post->name}}</p>
                        </div>
                    </div>


                </div>


                    <a class="info" href="{{ route('detail', $post->slug)  }}">Ver mais</a>


            </div>
        </div>


    </div>

    @endforeach
    </div>

    <hr>

<div class="row">
    <nav class="col-lg-12">
        {{ $posts->render() }}
    </nav>
</div>



@endsection

{{--Section footer--}}
@section('footer')



@endsection
