
@extends('layouts.main')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}
    <link rel="stylesheet" href="{{asset('vendor/juxtapose/css/juxtapose.css')}}">
    <style>

        body{
            background: -webkit-linear-gradient(left, #393e42, #fff);
        }

        .juxtapose {
            max-width: 600px;
        }
        .jx-slider {
            margin-top: 1em;
        }

        .card-body .skills
        {
            position: relative;
            padding: 15px 20px;
            background: rgba(0,0,0,0.1);
            margin: 10px 0;
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: inset 0 0 25px rgba(0,0,0,0.5);

        }

        .card-body .skills h6{
            margin: 0;
            padding: 0;
            color: black;
            float: left;
            font-size: small;
        }

        .card-body .skills .percent {
            float: right;
            color: black;
            font-size: small;
        }


        .card-body .skills .bar {
            position: relative;
            width: 100%;
            height: 4px;
            background: black;
            margin: 15px 0 10px;
        }

        .card-body .skills .bar .progress {
            position: absolute;
            top : 0;
            left: 0;
            width: 80%;
            height: 100%;
            background: linear-gradient(to right, #0a0e77, #2b80ff);
        }

        .card-body .skills .bar .progress:before {
            content: '';
            position: absolute;
            top: -5px;
            right: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: white;
            box-shadow: 0 0 25px rgba(41,123,247,1);

        }
    </style>


@endsection

{{--Section footer--}}
@section('content')
    {{-- conteiner body --}}
    <div class="container">

        <!-- Heading Row -->
        <div class="row align-items-center my-5">
            <div class="col-lg-7">

                <div class="juxtapose">
                    <img class="left" src="http://online.wsj.com/media/LIONDOORA.jpg" data-label="2009" alt="Maidan square in 2009" data-credit="" style="max-height: 400px"/>
                    <img class="right" src="http://online.wsj.com/media/LIONDOOR_2A.jpg" data-label="2014" alt="Maidan square in 2014" data-credit="" style="max-height: 400px"/>
                </div>

            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <h1 class="font-weight-light">O que é este projeto?</h1>
                <p>É um repositório de imagens publicadas por diversos colaboradores que podem ser utilizadas para estudos relacionados com as alterações do meio ambiente. Os colaboradore compremetem-se a publicar e ceder os direitos de utilização para fins academicos e de pesquisa.  </p>
                <a class="btn btn-primary" href="#">ver mais!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
        <!-- Call to Action Well -->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body">
                <p class="text-white m-0">Sua contribuição e valiosa para o crescimento deste projeto, sinta-se a vontade para participar!</p>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">As Imagens</h2>
                        <p class="card-text">As imagens possuem alta resolução e são classificadas por autor, categoria, etiquetas, localização geografica entre outras.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm">Mais informações</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Ferramentas</h2>
                        <p class="card-text">Temos algumas ferramentas que auxiliam os colaboradores na recolha de imagens para serem anexadas a imagem ja existentes como "reshot", analise visual de duas imagens, etc. alem do sistema de download de imagems para os utilizadores registados.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm">Mais informações</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Concluido</h2>
                        <p class="card-text">O estatus da aplicação se encontra:.</p>
                        <div class="skills">
                            <div class="skills-label">
                                <h6>Utlilizadores</h6>
                                <span class="percent">50%</span>
                                <div style="clear: both"></div>
                            </div>
                            <div class="bar">
                                <div class="progress" style="width:50%"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills-label">
                                <h6>Publicações</h6>
                                <span class="percent">95%</span>
                                <div style="clear: both"></div>
                            </div>
                            <div class="bar">
                                <div class="progress" style="width:95%"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills-label">
                                <h6>Tabelas</h6>
                                <span class="percent">90%</span>
                                <div style="clear: both"></div>
                            </div>
                            <div class="bar">
                                <div class="progress" style="width:90%"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills-label">
                                <h6>Repetir Publicação</h6>
                                <span class="percent">90%</span>
                                <div style="clear: both"></div>
                            </div>
                            <div class="bar">
                                <div class="progress" style="width:90%"></div>
                            </div>
                        </div>
                        <div class="skills">
                            <div class="skills-label">
                                <h6>Geo localização</h6>
                                <span class="percent">30%</span>
                                <div style="clear: both"></div>
                            </div>
                            <div class="bar">
                                <div class="progress" style="width:30%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-sm">Mais informações</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->

        </div>
        <!-- /.row -->


    </div>

@endsection

{{--Section footer--}}
@section('footer')

    {{-- Another scripts and styles in footer --}}
    <script src="{{asset('vendor/juxtapose/js/juxtapose.js')}}"></script>

@endsection








