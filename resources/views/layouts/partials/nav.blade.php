<!-- Navigation -->
<nav class="navbar navbar-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <!-- Logotipo -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo_b1.png')  }}" alt="{{ config('app.name', 'DigitalLANDSCAPE') }}" >
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">
                        Fotografias
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">
                        Contatos
                    </a>
                </li>


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                    @if (Route::has('register'))
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ asset(Auth::user()->profile->file) }}" style="width:40px; height:40px; position:absolute; top:0px; right:-10px; border-radius:50%">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if ( Auth::user()->profile->role_id == 1  )
                                <a class="dropdown-item" href="{{ route('admin.index') }}">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('adminprofile.index')  }}">
                                <i class="far fa-address-card">  </i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off">  </i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
</div>
