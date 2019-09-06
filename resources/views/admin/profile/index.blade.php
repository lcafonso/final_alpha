
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
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#publicacoes" data-toggle="tab" class="nav-link">Publicações</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#seguidores" data-toggle="tab" class="nav-link">Seguidores</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#seguindo" data-toggle="tab" class="nav-link">Seguindo</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5>Perfil do utilizador</h5>

                        <a href="{{route('adminprofile.edit', $user->id)}}" class="badge badge-dark badge-pill mb-5">
                            <i class="fas fa-user-edit"> editar perfil</i>
                        </a>

                        <div class="row">
                            <div class="col-md-6">
                                <h6>Nome Completo</h6>
                                <p>
                                    {{$user->name}}
                                </p>
                                <h6>Função</h6>
                                <p>
                                    {{$role->name}}
                                </p>
                                <h6>Sobre</h6>
                                <p>
                                    {{$user->profile->body}}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Redes Sociais</h6>
                                <a href="#" class="badge badge-dark badge-pill">{{$user->profile->social1}}</a>
                                <a href="#" class="badge badge-dark badge-pill">{{$user->profile->social1}}</a>
                                <a href="#" class="badge badge-dark badge-pill">{{$user->profile->social1}}</a>

                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> {{$followers->count()}} Seguidores</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> {{$followings->count()}} Seguindo</span>
                                <span class="badge badge-danger"><i class="fa fa-eye"></i> {{$numberOfPosts['publicadas']}}/{{$numberOfPosts['total']}} Publicações</span>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Dados da Conta</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>

                                    <tr>
                                        <td>
                                            Nome de Utilizador/Email:<strong>{{$user->email}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Telefone:<strong>{{$user->profile->phone}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Data de nascimento:<strong>{{$user->profile->birth}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Local:<strong>{{$user->profile->local}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pais:<strong>{{$user->profile->country}}</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sexo:<strong>{{$user->profile->genre}}</strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="publicacoes">

                        <div class="container">

                            <div class="row text-center text-lg-left">

                                @foreach ($posts as $post)
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <a href="{{ route('detail', $post->slug)  }}" class="d-block mb-4 h-100">
                                            <img class="img-fluid img-thumbnail" src="{{ $post->file }}" style="height: auto; width: 400;" alt="">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                            {{$posts->render()}}
                        </div>

                    </div>
                    <div class="tab-pane" id="seguidores">
                        @foreach ($followers as $follower)
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nome Completo</h6>
                                    <p>
                                        {{$follower->name}}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="tab-pane" id="seguindo">
                        @foreach ($followings as $following)
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Nome Completo</h6>
                                    <p>
                                        {{$following->name}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="{{ asset( $user->profile->file ) }}" class="mx-auto img-fluid rounded-circle d-block" alt="avatar">
                <h6 class="mt-2">Escolher uma foto diferente</h6>
                <label class="custom-file">
                    <form enctype="multipart/form-data" action="/admin/profile" method="POST">
                        <input type="file" name="file" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" class="btn btn-sm btn-primary float-center">
                    </form>

                </label>
            </div>
        </div>
    </div>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}


@endsection
