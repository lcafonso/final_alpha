@extends('admin.admin')

@section('content')


<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="{{ asset($user->profile->file) }}" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                    <h3 class="h6 font-weight-light text-secondary text-uppercase">Social</h3>
                    <div class="work-experience pt-2">
                        <div class="work mb-4">
                            <strong class="h6 d-block text-warning mb-1">URL1</strong>
                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">{{$user->profile->social1}}</strong>

                        </div>
                        <div class="work mb-4">
                            <strong class="h6 d-block text-warning mb-1">URL2</strong>
                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">{{$user->profile->social2}}</strong>

                        </div>
                        <div class="work mb-4">
                            <strong class="h6 d-block text-warning mb-1">URL3</strong>
                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">{{$user->profile->social3}}</strong>
                        </div>
                        <div class="work mb-4">
                            <strong class="h6 d-block text-warning mb-1">Pagina pessoal</strong>
                            <strong class="h5 d-block text-secondary font-weight-bold mb-1">{{$user->profile->web}}</strong>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div class="col-md-8">
            <div class="d-flex align-items-center">
                <h2 class="font-weight-bold m-0">
                    {{$user->name}}
                </h2>
                <address class="m-0 pt-2 pl-0 pl-md-4 font-weight-light text-secondary">
                    <i class="fa fa-map-marker"></i>
                    {{$user->profile->local}}, {{$user->profile->country}}
                </address>
            </div>
            <p class="h5 text-primary mt-2 d-block font-weight-light">
                {{$role->name}}
            </p>
            <p class="lead mt-4">{{$user->profile->body}}</p>
            <section class="mt-5">
                <h3 class="h6 font-weight-light text-secondary text-uppercase">FOTOGRAFIAS PUBLICADAS</h3>
                <div class="d-flex align-items-center">
                    <strong class="h1 font-weight-bold m-0 mr-3">{{$numberOfPosts['publicadas']}} / {{$numberOfPosts['total']}}</strong>
                    <div>
                        <input data-filled="fa fa-2x fa-star mr-1 text-warning" data-empty="fa fa-2x fa-star-o mr-1 text-light" value="5" type="hidden" class="rating" data-readonly />
                    </div>
                </div>
            </section>
            <section class="d-flex mt-5">
                <button class="btn btn-light bg-transparent mr-3 mb-3">
                    <i class="fa fa-comments"></i>
                    Mensagem privada
                </button>
                <button class="btn btn-light bg-transparent mr-3 mb-3">
                    <i class="fa fa-warning"></i>
                    Relatorios
                </button>
                <button class="btn btn-primary mb-3">
                    <i class="fa fa-check"></i>
                    Confirmar email
                </button>
            </section>
            <section class="mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            Sobre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                            <p>Seguidores <span class="badge badge-danger">{{$followers->count()}}</span></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                            <p>Seguindo <span class="badge badge-danger">{{$followings->count()}}</span></p>
                        </a>
                    </li>
                </ul>
                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h6 class="text-uppercase font-weight-light text-secondary">
                            Contato
                        </h6>
                        <dl class="row mt-4 mb-4 pb-3">
                            <dt class="col-sm-3">Telefone</dt>
                            <dd class="col-sm-9">{{$user->profile->phone}}</dd>

                            <dt class="col-sm-3">Endereço Email</dt>
                            <dd class="col-sm-9">
                                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                            </dd>
                        </dl>

                        <h6 class="text-uppercase font-weight-light text-secondary">
                            Informação Basica
                        </h6>
                        <dl class="row mt-4 mb-4 pb-3">
                            <dt class="col-sm-3">Data Nascimento</dt>
                            <dd class="col-sm-9">{{$user->profile->birth}}</dd>

                            <dt class="col-sm-3">Sexo</dt>
                            <dd class="col-sm-9">{{$user->profile->genre}}</dd>
                        </dl>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($followers as $follower)
                                <tr>
                                    <td width="10%">{{ $follower->id }}</td>
                                    <td width="90%">{{ $follower->name }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($followings as $following)
                                <tr>
                                    <td width="10%">{{ $following->id }}</td>
                                    <td width="90%">{{ $following->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
