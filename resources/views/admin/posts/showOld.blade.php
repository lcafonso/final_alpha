@extends('admin.admin')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>

    </style>


@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Publicação</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Detalhes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Mais Imagens</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Tab home -->
            <div class="tab-pane container active" id="home">
                <h3 class="pb-4 mb-4 font-italic border-bottom mt-5">
                    {{ $post->name  }}
                </h3>



                <div class="blog-post">
                    <h4 class="blog-post-title">
                        <a href="{{ route('category', $post->category->slug ) }}">
                            {{ $post->category->name}}
                        </a>

                    </h4>
                    <p class="blog-post-meta">{{ $post->created }} por: <a href="#">username</a></p>

                    <img src="{{ $post->file }}" alt="" width="740" height="auto" >
                    <hr>
                    <h3>Resumo</h3>
                    <p>{{ $post->excerpt }}</p>
                    <hr>
                    <h3>Descrição</h3>
                    <p>{!! $post->body !!} </p>
                    <hr>
                    Etiquetas
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tag', $tag->slug ) }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div><!-- /.blog-post -->

            </div>
            <!-- Tab menu1 -->
            <div class="tab-pane container fade" id="menu1">
                <div class="p-4 mb-3 bg-light rounded  mt-5">
                    <h4 class="font-italic">Informação Adicional</h4>
                    <p class="mb-0">Equipamento: <em>{{ $post->detail->equipment }}</em></p>
                    <p class="mb-0">Exposição: <em>{{ $post->detail->exposure }}</em></p>
                    <p class="mb-0">Abertura: <em>{{ $post->detail->aperture }}</em></p>
                    <p class="mb-0">ISO: <em>{{ $post->detail->iso }}</em></p>
                    <p class="mb-0">Dimensoes: <em>{{ $post->detail->dimensionX }}</em> x <em>{{ $post->detail->dimensionY }}</em> </p>
                    <p class="mb-0">Resolução: <em>{{ $post->detail->resolution }}</em></p>
                    <p class="mb-0">Tecnologia: <em>{{ $tech->name }}</em></p>


                </div>

            </div>
            <!-- Tab menu2 -->
            <div class="tab-pane container fade" id="menu2">

                <div class="row">
                    <!-- Page Content -->
                    <div class="container mt-5">

                        <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Imagens Relacionadas</h1>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-left">

                            @foreach ($posts as $post)
                                <div class="col-lg-3 col-md-4 col-6">
                                    <a href="{{ route('detail', $post->slug)  }}" class="d-block mb-4 h-100">
                                        <img class="img-fluid img-thumbnail" src="{{ $post->file }}" style="height: auto; width: 400;" alt="">
                                    </a>
                                </div>
                            @endforeach

                        </div>

                    </div>
                    <!-- /.container -->
                </div>

            </div>
        </div>



    </div>


@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection

