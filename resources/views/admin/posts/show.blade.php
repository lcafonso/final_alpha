@extends('admin.normal')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>
        @font-face{
            font-family:'Glyphicons Halflings';
            src:url('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.eot');
            src:url('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
            url('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.woff') format('woff'),
            url('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.ttf') format('truetype'),
            url('https://netdna.bootstrapcdn.com/bootstrap/3.0.0/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
        }

        .glyphicon{
            position:relative;
            top:1px;
            display: inline-block;
            font-family:'Glyphicons Halflings';
            font-style:normal;
            font-weight:normal;
            line-height:1;
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .glyphicon-ok:before {
            font-family: "Glyphicons Halflings";
            content: "\e114";
            float: right;
            margin-left: 15px;
        }

        .content-section {
            background-color: #000000;
            min-height: 940px;
            border: solid 1px #f1ae00;
        }

        .sidebar-section {
            position: absolute;
            background-color: #fff;
            min-height: 940px;
            height: auto;
            width: 100%;
            margin: 10px -15px auto;

        }


        .sidebar-item {
            width: 100%;
            height: 100%;
            text-align: center;


        }

        .sidebar-item h3 {
            background: #eeeeee;
            max-width: 100%;

            border-bottom: solid 1px #00ff2c;
        }

        .make-me-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }



        /* Ignore This, just coloring */
        body {
            background: #fff;
        }

        article {
            background: #ffffff;
        }

        /* Icon when the collapsible content is shown */
        .icon:after {
            font-family: "Glyphicons Halflings";
            content: "\e114";
            float: right;
            margin-left: 15px;
        }
        /* Icon when the collapsible content is hidden */
        .icon.collapsed:after {
            content: "\e080";
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

        .image-size {
            height:940px;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            display: block;
            object-fit: cover;
        }




    </style>



@endsection





{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    {{--<div class="container-fluid">
        <img class="image-size" src="{{ $post->file }}"  alt="{{ $post->name }}"/>
        <!-- Portfolio Item Heading -->
        <h1>{{ $post->name }} </h1>
        <small>Categoria: {{ $post->category->name  }}</small>

        <a href="{{ url()->previous() }}">back</a>

    </div>--}}

    <article>

        <div class="container-fluid">

            <div class="row">
                <div class="col-9">

                    <div class="content-section">
                        <img class="image-size" src="{{ $post->file }}"  alt="{{ $post->name }}"/>
                    </div>
                </div>

                <div class="col-3">

                    <div class="sidebar-section">
                        <div class="sidebar-item">
                            <div class="make-me-sticky">
                                <div class="row">
                                    <div class="col-md-12 offset-md-0" style="text-align: left;" >
                                        <img src="{{asset($post->user->profile->file)}}" alt="{{$post->user->profile->name}}" class="cir-responsive"/>

                                        {{$post->user->name}}
                                        <p style="font-size: 50%;">{{$post->user->profile->country}}</p>
                                        <hr>
                                    </div>
                                    <div class="col-md-12 offset-md-0" style="text-align: center;" >
                                        <button type="button" class="badge badge-pill badge-primary">
                                            Seguidores <span class="badge badge-light">0</span>
                                        </button>
                                        <button type="button" class="badge badge-pill badge-primary">
                                            Seguindo <span class="badge badge-light">0</span>
                                        </button>
                                        <button type="button" class="badge badge-pill badge-primary">
                                            Publicações <span class="badge badge-light">0</span>
                                        </button>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="sidebar-item">

                            <div class="make-me-sticky">
                                <button type="button" class="btn btn-primary icon" data-toggle="collapse" data-target="#demo">Detalhes</button>
                            </div>

                            <div id="demo" class="collapse show" style="text-align: left;" >
                                <hr>
                                <div class="row"  >

                                    <div class="col-1"><img src="{{asset('img/camera-retro.svg')}}" alt="" style="max-height: 20px; fill: #385d7a;"></div>
                                    <div class="col-5">{{ $post->detail->equipment }}</div>
                                    <div class="col-1"><img src="{{asset('img/resize-tool.svg')}}" alt="" style="max-height: 20px"> </div>
                                    <div class="col-4">{{ $post->detail->dimensionY }} x {{ $post->detail->dimensionX }}</div>

                                </div>
                                <div class="row">

                                    <div class="col-1"><img src="{{asset('img/resolution.svg')}}" alt="" style="max-height: 20px"></div>
                                    <div class="col-5">{{ $post->detail->resolution }}</div>
                                    <div class="col-1"><img src="{{asset('img/svg-shutter-icon-2.svg')}}" alt="" style="max-height: 20px"></div>
                                    <div class="col-5"> {{ $post->detail->aperture }}</div>

                                </div>
                                <div class="row">

                                    <div class="col-1"> <img src="{{asset('img/brightness.svg')}}" alt="" style="max-height: 20px"></div>
                                    <div class="col-5">{{ $post->detail->exposure }}</div>
                                    <div class="col-1"> <img src="{{asset('img/iso-file-format.svg')}}" alt="" style="max-height: 20px"></div>
                                    <div class="col-5"> {{ $post->detail->latitude }} ;  {{ $post->detail->longitude }}</div>

                                </div>
                                <div class="row">

                                    <div class="col-1"> <img src="{{asset('img/chip.svg')}}" alt="" style="max-height: 20px"></div>
                                    <div class="col-5">{{ $post->detail->technologie->name}} </div>
                                    <div class="col-1"></div>
                                    <div class="col-5"></div>

                                </div>
                            </div>
                            <hr>
                            <div class="make-me-sticky">
                                <!-- Portfolio Item Heading -->
                                <h1>{{ $post->name }} </h1>
                                <small>Categoria: {{ $post->category->name  }}</small>
                            </div>
                        </div>

                        @auth
                        <div class="sidebar-item">
                            <small>
                                <hr>
                                {!! Form::model($post, ['route' => ['adminposts.updateStatus', $post->id],'method' => 'PUT'])  !!}
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        {!! Form::label('status', 'Estado actual:') !!}
                                        <br>
                                        @if($post->status=='DRAFT')
                                            <label>
                                                {!! Form::radio('status', 'PUBLISHED',false,[]) !!} Publicado
                                            </label>
                                            <label>
                                                {!! Form::radio('status', 'DRAFT',true,['status' => 'DRAFT']) !!} Rascunho
                                            </label>

                                        @else
                                            <label>
                                                {!! Form::radio('status', 'PUBLISHED',true,['status' => 'PUBLISHED']) !!} Publicado
                                            </label>
                                            <label>
                                                {!! Form::radio('status', 'DRAFT',false,[] ) !!} Rascunho
                                            </label>

                                        @endif
                                        &nbsp; &nbsp; &nbsp; &nbsp;
                                        {{ Form::button('<i class="fa fa-download"></i>', ['type' => 'submit', 'class' => 'btn btn-info btn-sm'] ) }}


                                    </div>

                                {!! Form::close() !!}

                            </small>
                        </div>
                        @endauth

                        <div class="sidebar-item">

                            <hr />
                            <div class="make-me-sticky">
                                <button type="button" class="btn btn-primary icon" data-toggle="collapse" data-target="#comentarios">Comentarios</button>
                            </div>
                            <div id="comentarios" class="collapse show" style="text-align: left;" >
                                <hr />
                                <div style="width: auto; height: 200px; overflow-y: scroll; text-align: left">
                                @include('admin.posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                                <hr />
                                </div>
                                <h4>Comentar</h4>
                                <form method="post" action="{{ route('comments.store'   ) }}">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" name="body"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Salvar" />
                                    </div>
                                </form>
                            </div>
                            <hr />
                        </div>
                        <br>
                        <a href="{{ route('admin.index') }}">back</a>
                    </div>

                </div>
            </div>
        </div>

    </article>

@endsection




{{--Section footer--}}
@section('footer')


@endsection

