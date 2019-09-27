@extends('admin.normal')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}


    <style>


        body {
            background: -webkit-linear-gradient(left, #a99958, #fff);
            overflow:hidden;
        }

        .btn-trans {
            background:none;
            box-shadow:none;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-right: -30rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.600rem .5rem;
            font-size: 1.2rem;
            background: -webkit-linear-gradient(left, rgba(9, 160, 169, 0.32), #fff);
        }

        #sidebar-wrapper .groupbox {
            width: 30rem;
            padding: 5px 0px 10px 50px;

        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-right: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-right: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-right: -27rem;
            }
        }


    </style>



@endsection

{{--Section footer--}}
@section('content')

    <div class="d-flex" id="wrapper">

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-home"></i><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-print"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-copy"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-file-import"></i></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="fas fa-print"></i></a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <img src="{{$post->file}}" style="height: 100%; width: 100%; object-fit: contain" alt="" >
            </div>
        </div>
        <!-- /#page-content-wrapper -->

        <!-- Sidebar -->
        <div class="bg-light border-left" id="sidebar-wrapper">
            <div class="sidebar-heading">
                <div class="row">
                    <div class="text-left col">

                        <button class="btn btn-trans " id="menu-toggle">
                            <i class="fas fa-sliders-h"></i>
                        </button>

                    </div>
                    <div class="text-right col">

                        <button class="btn btn-trans " id="menu-close">
                            <i class="fas fa-times-circle"></i>
                        </button>

                    </div>
                </div>


            </div>
            <div class="groupbox">

                <!-- Owner Detail -->


                <div class="row">
                    <div class="col-12">
                        <div class="card card-inverse" style="background-color: #fff; border-color: #fff;">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <h3 class="card-title" >{{ $user->name }}</h3>
                                        <p class="card-text"><strong>Email: </strong>{{$user->email}}</p>
                                        <p class="card-text"><strong>Detalhes: </strong>{{$user->profile->body}}</p>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <img class="btn-md" src="{{ asset($user->profile->file) }}" alt="" style="width: 100px;height: auto; border-radius:50%;">
                                    </div>

                                        <div class="col-md-4 col-sm-4 text-center">
                                            <h2><strong>{{$user->comments->count()}}</strong></h2>
                                            <p><small>Comentarios</small></p>
                                            <button class="btn btn-primary btn-block btn-md"><span class="fa fa-facebook-square"></span> Like  </button>
                                        </div>
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <h2><strong>{{$user->followings->count()}}</strong></h2>
                                            <p><small>Seguindo</small></p>
                                            <button class="btn btn-success btn-block btn-md"><span class="fa fa-twitter-square"></span> Tweet </button>
                                        </div>
                                        <div class="col-md-4 col-sm-4 text-center">
                                            <h2><strong>{{$user->followers->count()}}</strong></h2>
                                            <p><small>Seguido</small></p>
                                            <button type="button" class="btn btn-danger btn-block btn-md"><span class="fa fa-google-plus-square"></span> Follow </button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- /#sidebar-wrapper -->



    </div>
    <!-- /#wrapper -->






@endsection


{{--Section footer--}}
@section('footer')

    <!-- Menu Toggle Script -->

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>


@endsection


