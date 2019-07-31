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

        .advancedSearch{
            position: relative;
            width: 100%;
            height: 350px;
            background-color: rgba(0, 0, 0, 0.5);
            top: -50px;
            display: none;
        }



        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {

            color: #FFFFFF;

            background-color: #2399FB;

            border-color: #dee2e6 #dee2e6 #fff;

        }

        .space {
            display:inline-block;
            margin-left: 40px;
        }

    </style>


@endsection

{{--Section footer--}}

@section('content')

    <div class="advancedSearch" id="foo">
        {{-- formulario de procura avançada --}}
        <div class="container" >
            <ul class="nav nav-tabs " role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#fotografia" role="tab">Fotografia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#pessoa" role="tab">Pessoa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#grupo" role="tab">Grupo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#album" role="tab">Album</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="fotografia" role="tabpanel">
                    {{-- pane 1 --}}
                    {!! Form::open(['route' => 'advance_search', 'method' => 'get']) !!}
                    @include('web._advform')
                    {!! Form::close() !!}


                </div>
                <div class="tab-pane" id="pessoa" role="tabpanel">
                    {{-- pane 2 --}}
                    {!! Form::open(['route' => 'author_search', 'method' => 'get']) !!}
                    @include('web._authorform')
                    {!! Form::close() !!}
                </div>

                <div class="tab-pane" id="grupo" role="tabpanel">
                    {{-- pane 3 --}}
                    <p style="color: #FFFFFF">Ainda nao implementado, desculpe o transtorno!</p>
                </div>
                <div class="tab-pane" id="albun" role="tabpanel">
                    {{-- pane 4 --}}
                    <p style="color: #FFFFFF"> Ainda nao implementado, desculpe o transtorno!</p>

                </div>
            </div>


        </div>
    </div>


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



    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
        //-->

        function today() {
            let d = new Date();
            let currDate = d.getDate();
            let currMonth = d.getMonth()+1;
            let currYear = d.getFullYear();
            return currYear + "-" + ((currMonth<10) ? '0'+currMonth : currMonth )+ "-" + ((currDate<10) ? '0'+currDate : currDate );
        }

        document.getElementById('dataInicio').value = "2019-01-02";
        document.getElementById('dataFim').value = today();

    </script>

@endsection
