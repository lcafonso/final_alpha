@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>
        body{
            background: -webkit-linear-gradient(left, #33775f, #fff);
        }


    </style>


@endsection

{{--Section footer--}}

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <h1 class="my-4">Ultimas Publicações
                    <small></small>
                </h1>

                @foreach ($posts as $post)

                    <!-- Blog Post -->
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ $post->file }}" style="max-width: 750px;" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title"> {{ $post->name }} </h2>
                                <p class="card-text"> {{ $post->excerpt }} </p>
                                <a href="{{ route('detail', $post->slug)  }}" class="btn btn-primary">
                                    Detalhes
                                    <i class="fas fa-arrow-right"></i>
                                </a>

                            </div>
                            <div class="card-footer text-muted">
                                Publicado em {{ $post->created }} por
                                <a href="#">{{ $post->user->name  }}</a>
                            </div>
                        </div>

                    @endforeach
                    <!-- Pagination -->
                    <div>
                        {{ $posts->render() }}
                    </div>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Procurar</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Procurar por...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Ir!</button>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categorias</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <ul class="mb-0">
                                    @foreach ($categs->chunk(2) as $cats)
                                    <div class="row">
                                        @foreach($cats as $cat)
                                            <div class="col-md-6">
                                            <li>
                                                <a href="{{ route('category', $cat->slug ) }}" >{{ $cat->name }}</a>
                                            </li>
                                            </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Mapa</h5>
                    <div class="card-body">
                        <img src="{{asset('img/Portugal_location_map.svg')}}" style="max-width: 100%;">
                    </div>
                </div>


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection