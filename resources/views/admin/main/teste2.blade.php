@extends('admin.normal')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}


    <style>


        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            overflow: hidden;
            margin: 0;
            background: -webkit-linear-gradient(left, #6267a9, #fff);
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -25rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .conteudo {
            width: 25rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper{
            margin-left: 0px;
        }


        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -25rem;
            }
        }

    </style>

@endsection

{{--Section footer--}}
@section('content')



        {{-- --}}



        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    Detalhes

                </div>
                <div class="conteudo">

                    @include('admin.main.partials.cardUser', ['user' => $user])


                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <button class="btn btn-primary" id="menu-toggle">
                    <span><i class="fa fa-bars"></i></span>
                </button>




                <div class="container-fluid">
                    <img src="https://placebear.com/1900/1080" style="height: 100%; width: 100%; object-fit: contain" alt="" >
                </div>

            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->















@endsection



{{--Section footer--}}
@section('footer')

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    </script>


@endsection


