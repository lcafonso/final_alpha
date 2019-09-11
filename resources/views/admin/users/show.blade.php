@extends('admin.admin')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-8 offset-md-2 blog-main">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Ver utilizador</h1>

                </div>

               {{--
                0 => "id"
                1 => "name"
                2 => "surname"
                3 => "body"
                4 => "file"
                5 => "local"
                6 => "country"
                7 => "birth"
                8 => "genre"
                9 => "social1"
                10 => "social2"
                11 => "social3"
                12 => "web"
                13 => "phone"
                14 => "user_id"
                15 => "role_id"
                --}}

                <div class="row">
                    <div class="col-2">
                        <img src="{{$user->profile->file}}" alt="" style="width: 150px; height: auto;">
                    </div>
                    <div class="col-6 ml-5">
                        <p><strong>Nome:</strong> {{$user->profile->name }}</p>
                        <p><strong>Sobrenome:</strong> {{$user->profile->surname }}</p>
                        <p><strong>Descrição:</strong> {{$user->profile->body }}</p>
                        <p><strong>local:</strong> {{$user->profile->local }}</p>
                        <p><strong>Pais:</strong> {{$user->profile->country }}</p>

                    </div>


                </div>


            </div><!-- /.blog-main -->

        </div>

    </div>
@endsection
