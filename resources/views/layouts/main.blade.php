<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        {{--  Informação do header  --}}
        @include('layouts.partials.head' )

        <!-- Styles -->
        @yield('head')

    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent">

        <div id="app">

            {{--  Barra de navegação  --}}
            @include('layouts.partials.nav')

            {{--  header das paginas--}}
            @include('layouts.partials.header')




            {{--  Informação e erros  --}}
            @if (session('info'))
                <div class="container">
                    <div class="row">
                        <div class="alert alert-success alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> {{ session('info') }}
                        </div>
                    </div>
                </div>
            @endif

            @if(count($errors))
                <div class="container">
                    <div class="row">
                        <div class="alert alert-warning alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            @endif

            {{-- Conteudo do corpo  --}}
            <main>
                @yield('content')
            </main>

        </div>

        {{--  roda pe da pagina  --}}
        @include('layouts.partials.footer')

        {{--  scripts incluidos no rodape --}}
        @include('layouts.partials.footer-scripts')

        {{--  outras informaçoes que podem ser incluidas no fim da pagina  --}}
        @yield('footer')

    </body>
</html>
