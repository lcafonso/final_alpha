
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
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver Perfil</h1>

                </div>

                <div>
                    <p><strong>Nome:</strong> {{$user->name }}</p>
                    <p><strong>Body:</strong> {{$user->email }}</p>
                </div>

            </div><!-- /.blog-main -->

        </div>

    </div>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection
