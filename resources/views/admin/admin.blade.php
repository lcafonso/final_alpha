<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('admin.partials.head')

<!-- Styles -->
    @yield('head')

</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Page Sidebar -->
    @include('admin.partials.sidebar')




    <!-- Page Content -->
    <div id="page-content-wrapper">

        @include('admin.partials.nav')

        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        @yield('content')

    </div>


</div>

@include('admin.partials.footer')

@include('admin.partials.footer-scripts')

@yield('footer')

</body>
</html>
