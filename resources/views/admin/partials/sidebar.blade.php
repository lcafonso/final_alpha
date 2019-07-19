<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo_a1.png')  }}" id="logo" alt="{{ config('app.name', 'DigitalLANDSCAPE') }}" style="max-width: 150px; height: auto;">
        </a>
    </div>
    <div class="list-group list-group-flush">
        <a href="#sub_categoria_1" class="list-group-item list-group-item-action bg-light" id="categoria_1" data-toggle="collapse" data-parent="#sub_categoria_1" style="padding-left: 25px;">
            <span class="fa fa-wrench fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Tabelas</span>
        </a>
        <div class="collapse list-group-submenu" id="sub_categoria_1">
            <a href="{{route('admintags.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-tags nav-icon ml-4" ></i>
                Etiquetas
            </a>
            <a href="{{route('admincategories.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-dice-d6 nav-icon ml-4"></i>
                Categorias
            </a>
            <a href="{{route('admintechnologies.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="far fa-circle nav-icon ml-4"></i>
                Tecnologias
            </a>
            <a href="{{route('adminprofiles.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-users nav-icon ml-4"></i>
                Utilizadores
            </a>
            <a href="{{route('adminroles.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-user-tag nav-icon ml-4"></i>
                Funções
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{route('admindistricts.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="far fa-map nav-icon ml-4"></i>
                Distritos
            </a>
            <a href="{{route('admincounties.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-map-marked-alt nav-icon ml-4"></i>
                Concelhos
            </a>
            <a href="{{route('adminplaces.index')}}" class="list-group-item sub-item" data-parent="#sub_categoria_1" style="padding-left: 50px;">
                <i class="fas fa-map-signs nav-icon ml-4"></i>
                Localidades
            </a>
            <div class="dropdown-divider"></div>
        </div>

        <a href="{{route('adminposts.index')}}" class="list-group-item list-group-item-action bg-light">
            <span class="fas fa-camera-retro fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Publicações</span>
        </a>

        <a href="{{route('tools')}}" class="list-group-item list-group-item-action bg-light">
            <span class="fas fa-tools fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Ferramentas</span>
        </a>
        <a href="{{route('events')}}" class="list-group-item list-group-item-action bg-light">
            <span class="fas fa-tasks  fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Eventos</span>
        </a>
        <a href="{{route('status')}}" class="list-group-item list-group-item-action bg-light">
            <span class="fas fa-thermometer-half  fa-lg fa-fw"></span>
            <span style="margin-left: 25px;">Status</span>
        </a>
    </div>
</div>
<!-- /#sidebar-wrapper -->
