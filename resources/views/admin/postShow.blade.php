<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('layouts.partials.head')

<!-- Styles -->
    @yield('head')

</head>
<body>

<div class="d-flex" id="wrapper">
    @include('layouts.partials.nav')

    <main>
        @yield('content')
    </main>

</div>

@include('layouts.partials.footer')

@include('admin.partials.footer-scripts')

@yield('footer')

</body>
</html>
