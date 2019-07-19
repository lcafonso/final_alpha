<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.partials.head', ['data' => $data] )

    <!-- Styles -->
    @yield('head')

</head>
<body>

    <div id="app">

        @include('layouts.partials.nav', ['data' => $data])

        @include('layouts.partials.header', ['data' => $data])

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

        <main class="py-4">
            @yield('content')
        </main>

    </div>

    @include('layouts.partials.footer', ['data' => $data])

    @include('layouts.partials.footer-scripts', ['data' => $data])

    @yield('footer')

</body>
</html>
