<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
            aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="">Ali-<span class="color-b">Imobiliária</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active" href="{{route('pages.index')}}">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">Imóveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">Blog Imobiliário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">Quem Somos</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('cliente.login') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('cliente.add') }}">Cadastrar</a>
                    </li>
                @endguest

                @auth


                @auth

@php
$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
@endphp
                    <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person user-icon" >{{ Auth::user()->name}}</i>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">

<img class="img-md rounded-circle" src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}" alt="Profile image">

                                    <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                                </div>
                                <a class="dropdown-item" href=""><i
                                        class="dropdown-item-icon icon-user text-primary"></i>Meu
                                    Perfil <span class="badge badge-pill badge-danger">1</span></a>
                                <a class="dropdown-item" href=""><i class="dropdown-item-icon icon-speech text-primary"></i>
                                    Mensagens</a>
                                <a class="dropdown-item" href=""><i
                                        class="dropdown-item-icon icon-energy text-primary"></i>
                                    Meus Imóveis</a>
                                <a type="submit" class="dropdown-item"
                                    href="{{ route('cliente.logout') }}"><i
                                        class="dropdown-item-icon icon-power text-primary">
                                    </i>Sair</a>
                            </div>
                    </li>
                @endauth



                @endauth
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
            data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-search"></i>
        </button>

    </div>
</nav>
<!-- ======= Property Search Section ======= -->
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Procurar Imóvel</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="pb-2" for="Type">Digite</label>
                        <input type="text" class="form-control form-control-lg form-control-a"
                            placeholder="Palavras-chave">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Tipo</label>
                        <select class="form-control form-select form-control-a" id="Type">
                            <option>Selecione</option>
                            <option>Arrendar</option>
                            <option>Comprar</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="city">Distrito Urbano</label>
                        <select class="form-control form-select form-control-a" id="city">
                            <option>Selecione</option>
                            <option>Kilamba</option>
                            <option>Talatona</option>
                            <option>Camama</option>
                            <option>Zango</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Quartos</label>
                        <select class="form-control form-select form-control-a" id="bedrooms">
                            <option>Selecione</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">Garagem</label>
                        <select class="form-control form-select form-control-a" id="garages">
                            <option>Selecione</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Salas</label>
                        <select class="form-control form-select form-control-a" id="bathrooms">
                            <option>Selecione</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="price">Preço Minimo</label>
                        <select class="form-control form-select form-control-a" id="price">
                            <option>Preço</option>
                            <option>50.000,00 Kz</option>
                            <option>60.000,00 Kz</option>
                            <option>70.000,00</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Procurar imóvel</button>
                </div>
            </div>
        </form>

    </div>
</div>
