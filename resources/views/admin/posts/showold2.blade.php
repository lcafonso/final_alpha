@extends('admin.postShow')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html, body{
            background: -webkit-linear-gradient(left, #bcbcbc, #fff);
            height: 100%;
            margin: 0;
        }

        /* Main content */
        main {
            margin-top: 90px !important; /* Add a top margin to avoid content overlay */
            margin-bottom: 50%;
            display: block;
        }

        .sidenav {
            height: 100%;
            max-height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            right: 0;
            background: #FFFFFF;
            overflow-x: hidden;
            overflow-y: auto;
            transition: 0.5s;
            margin-top: 90px !important;
            padding-top: 50px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        div.parent{
            position:  fixed;
            top: 40px;
            left: 200px;
            height: 40px;
            width: 500px;
            margin: 0 auto;
            z-index: 9999;
        }

        .imagem {
            width: auto;
            height: 100vh;
            background-image: url("#");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .cir-responsive {
            float: left;
            width: 100%;
            height: 100%;
            max-width:70px;
            max-height: 70px;
            object-fit: cover;
            overflow: auto;
            margin-right: 10px;
            z-index: -1;
            -moz-box-shadow: 2px 2px 4px #ccc;
            -webkit-box-shadow: 2px 2px 4px #ccc;
            box-shadow: 2px 2px 4px #000000;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            border-radius:50%;

        }

        .hline { width:100%; height:1px; background: rgba(0,0,0,.4); }

        p.titulo {
            width:100%;
            height:2em;
            background: rgba(1,1,1,.6);
            color: #ffffff;
            text-align: center;
            margin-top:.5em;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>




@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <div class="main">

        <div id="mySidenav" class="sidenav">
            {{-- Autor da fotografia           --}}
            <div class="col-md-12 offset-md-1" style="text-align: left; color: #000000; background: #bcbcbc" >
                <img src="{{asset($post->user->profile->file)}}" alt="{{$post->user->profile->name}}" class="cir-responsive"/>

                {{$post->user->name}}
                <p style="font-size: 80%;">{{$post->user->profile->country}}</p>
            </div>

            <div class="hline mt-5"></div>

            <p class="titulo" >Titulo:</p>
            <h4 style="text-align: center">{{$post->name}}</h4>
            <div class="hline mt-2"></div>
            @if(Auth::check())
                <div class="row d-flex flex-row-reverse mt-2" >
                    @if($post->post_id)
                        <div class="col-md-4" rel="tooltip" title="Comparar com original">
                            <a href="{{route('compare',$post->id)}}" class="btn btn-sm btn-secondary"  style="height: 60px;width: 100px; border-radius: 12px">
                                <img src="{{asset('img/compare.svg')}}" style="width: auto;height:100%;filter: invert(100%);" alt="">
                            </a>
                        </div>
                    @endif
                    <div class="col-md-4" rel="tooltip" title="Carregar repetição da foto">
                        <a href="{{route('repost',$post->id)}}" class="btn btn-sm btn-secondary"  style="height: 60px;width: 100px; border-radius: 12px">
                            <img src="{{asset('img/reload.svg')}}" style="width: auto;height:100%;filter: invert(100%);" alt="">
                        </a>
                    </div>
                    <div class="col-md-4" rel="tooltip" title="Imprimir ficha de campo">
                        <a href="{{route('generate-pdf',$post->slug)}}" class="btn btn-sm btn-secondary" style="height: 60px;width: 100px; border-radius: 12px"">
                        <img src="{{asset('img/print.svg')}}" style="width: auto;height: 100%;filter: invert(100%);" alt="">
                        </a>
                    </div>


                </div>
            @endif

        </div>

       <div  id="imagem" class="imagem">

       </div>


        <div class="parent">

            <button type="button" class="btn btn-info" onClick="toggledisplay('mySidenav');">
                <i class="fas fa-info"></i>
            </button>
            <button type="button" class="btn btn-info">Info</button>



        </div>






    </div>



@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script>
        $(document).ready(function(){
            //your code here;
            document.getElementById("imagem").style.backgroundImage = "url( {{ $post->file }} )";
        })


        function toggledisplay(elementID)
        {
            (function(style) {
                style.width = style.width === '450px' ? '0' : '450px';
            })(document.getElementById(elementID).style);
        }






    </script>

@endsection

