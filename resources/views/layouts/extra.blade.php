<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background: url('{{asset('img/drone.jpg')}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 40px; /* Set the fixed height of the footer here */
            line-height: 40px; /* Vertically center the text there */
            background-color: rgba(0,0,0,.6);
        }

        .footer div {
            color: #fff;
            font-size: 12px;
            line-height: 30px;
            white-space: nowrap;
            display: inline-block;
            margin-left: 18px;
            margin-right: 48px;
            float: right;
        }
        .footer div a {

            margin-left: 18px;
            margin-right: 18px;

        }
    </style>

    @yield('head')

</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- START FOOTER DARK-->
    <footer class="footer">
        <div>
            <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
            <a href="{{ route('terms') }}">Termos de Utilização</a>
            <a href="{{ route('policy') }}">Politica de Privacidade</a>
        </div>
    </footer>
    <!-- START FOOTER DARK-->

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



</body>
</html>
