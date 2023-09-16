<!-- Parte 2 do Menu/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="profile-image">
                                <img class="img-xs rounded-circle" src="{{ 'assetes/images/faces/agente007.jpeg' }}"
                                    alt="profile image">
                                <div class="dot-indicator bg-success"></div>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">{{ Auth::user()->name }}</p>
                                <p class="designation">Administrator</p>
                            </div>
                            <div class="icon-container">
                                <i class="icon-bubbles"></i>
                                <div class="dot-indicator bg-danger"></div>
                            </div>
                        </a>
                    </li> --}}
        <li class="nav-item nav-category">
            <span class="nav-link">Painel Administrativo</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Ali-Imobiliária</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Funcionários</span>
                <i class="icon-user-follow menu-icon"></i>
            </a>

            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Adicionar funcionário</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="">Cargos</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">Imóvel</span>
                <i class="icon-home menu-icon"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="">Todos imoveis </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="">Adicionar Imóvel</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('todos.tipos') }}">Tipos de imóvel </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('add.tipos') }}"> Adicionar tipo de Imóvel</a></li>
                </ul>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="pages/icons/simple-line-icons.html">
                <span class="menu-title">Proprietários</span>
                <i class="icon-people menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Agendamento</span>
                <i class="icon-calendar menu-icon"></i>
            </a>
        </li>
        </li>
        <li class="nav-item nav-category"><span class="nav-link">Sistema</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Relatórios</span>
                <i class="icon-notebook menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <span class="menu-title">Notificações</span>
                <i class="icon-speech menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="menu-title">Mensagens</span>
                <i class="icon-bubbles menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route ('add.empresa')}}">
                <span class="menu-title">Empresa</span>
                <i class="icon-bubbles menu-icon"></i>
            </a>
        </li>

    </ul>
</nav>
<!-- Fim Menu -->
