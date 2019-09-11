@extends('admin.admin')

{{--Section Head--}}
@section('head')
    {{-- Another scripts and styles in head--}}

    <style>


        body {
            background: -webkit-linear-gradient(left, #6267a9, #fff);
        }

        #listadraft, #listauser {
            display: none;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }
        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }



        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: -1.25rem;
            right: -1rem;
            opacity: 0.4;
            font-size: 5rem;
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }


        .o-hidden {
            overflow: hidden !important;
        }
        .text-white {
            color: #fff !important;
        }


        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        *, ::before, ::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

    </style>

@endsection

{{--Section footer--}}
@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>

        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-images"></i>
                        </div>
                        <div class="mr-5">{{$postsDraft}} Novas imagens por aprovar!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 toggle" href="#listadraft">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-users"></i>
                        </div>
                        <div class="mr-5">11 Utilizadores por aprovar!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1 toggle" href="#listauser">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                    </a>
                </div>
            </div>

        </div>


        <div class="toggle-content" id="listadraft">
            @include('admin.main.partials.listaDraft', $posts)
        </div>

        <div class="toggle-content" id="listauser">
            <div class="columns large-6">
                lista de utilizadores
            </div>
        </div>

    </div>
@endsection

{{--Section footer--}}
@section('footer')

{{-- Another scripts and styles in footer --}}
<script>
    var show = function (elem) {
        elem.style.display = 'block';
    };

    var hide = function (elem) {
        elem.style.display = 'none';
    };

    var toggle = function (elem) {

        // If the element is visible, hide it
        if (window.getComputedStyle(elem).display === 'block') {
            hide(elem);
            return;
        }

        // Otherwise, show it
        show(elem);

    };

    // Listen for click events
    document.addEventListener('click', function (event) {

        // Make sure clicked element is our toggle
        if (!event.target.classList.contains('toggle')) return;

        // Prevent default link behavior
        event.preventDefault();

        // Get the content
        var content = document.querySelector(event.target.hash);
        if (!content) return;

        // Toggle the content
        toggle(content);

    }, false);


</script>

@endsection


