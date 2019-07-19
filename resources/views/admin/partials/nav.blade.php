<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-secondary" id="menu-toggle">
        <i class="fas fa-bars"></i>
    </button>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{ asset(Auth::user()->profile->file) }}" style="width:40px; height:40px; position:absolute; top:0px; left:-35px; border-radius:50%">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if ( Auth::user()->profile->role_id == 1  )
                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('adminprofile.index') }}">
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
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.index')}}">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home </a>
            </li>
        </ul>
    </div>
</nav>