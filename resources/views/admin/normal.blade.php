<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>titulo</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Our Custom CSS -->
    @yield('head')

    <!-- Font Awesome JS -->
    <script defer src="{{asset('vendor/fontawesome-free/js/solid.js')}}"></script>
    <script defer src="{{asset('vendor/fontawesome-free/js/fontawesome.js')}}"></script>
</head>

<body>

    @yield('content')

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="{{asset('vendor/jquery/jquery.slim.min.js')}}"></script>
    <!-- Popper.JS -->
    <script src="{{asset('js/popper.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    @yield('footer')

</body>

</html>
