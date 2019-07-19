<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('admin.partials.head')

<!-- Styles -->
    @yield('head')

</head>
<body>

<div class="d-flex" id="wrapper">

@include('admin.partials.sidebar')
<!-- Page Content -->
    <div id="page-content-wrapper">
        @include('admin.partials.nav')

        <div class="container-fluid">
            <h1 class="mt-4">Simple Sidebar</h1>
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>

@include('admin.partials.footer')

@include('admin.partials.footer-scripts')

@yield('footer')

</body>
</html>