<div class="container-scroller">
    <!-- partial:partials/Menu duas partes -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ asset( 'assetes/images/logo.png') }}" alt="logo" class="logo-dark" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset( 'assetes/images/logo.png') }}"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <h5 class="mb-0 font-weight-medium d-none d-lg-flex"> Seja novamento bem-vindo: {{ Auth::guard('admin')->user()->name }}
            </h5>
            <ul class="navbar-nav navbar-nav-right ml-auto">
                <form class="search-form d-none d-md-block" action="#">
                    <i class="icon-magnifier"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-speech"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                        aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">você tem 7 emails </p>
                            <span class="badge badge-pill badge-primary float-right">Ver tod</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}" alt="image"
                                    class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{ asset( 'assetes/images/faces/face12.jpg') }}" alt="image"
                                    class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                              <img src="{{ asset( 'assetes/images/faces/face1.jpg') }}" alt="image"
                                    class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>

@php
    $id = Auth::guard('admin')->user()->id;
    $profileData = App\Models\Admin::find($id);
@endphp

                <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">

<img class="img-xs rounded-circle ml-2" src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
                            alt="Profile image"> <span class="font-weight-normal"> {{ Auth::guard('admin')->user()->name }}
                        </span>
                        
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">

<img class="img-md rounded-circle" src="{{ !empty($profileData->imagem) ? url('upload/admin-imagem/' . $profileData->imagem) : url('upload/no_image.jpg') }}"
                                alt="Profile image">

                            <p class="mb-1 mt-3">{{ Auth::guard('admin')->user()->name }}</p>
                            <p class="font-weight-light text-muted mb-0">{{ Auth::guard('admin')->user()->email }}</p>
                        </div>

                        <a href="{{ route('admin.perfil') }}" class="dropdown-item"><i
                                class="dropdown-item-icon icon-note text-primary"></i>Meu
                            Perfil </a>

                        <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i>
                            Mensagens <span class="badge badge-pill badge-danger">1</span></a>

                        <a href="{{route('admin.edit.password')}}" class="dropdown-item"><i class="dropdown-item-icon icon-key text-primary"></i>
                            Alterar palavra-passe</a>

                        <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i>
                            FAQ</a>

                          <a type="submit" class="dropdown-item" href="{{route('admin.logout')}}"><i
                                  class="dropdown-item-icon icon-power text-primary">
                          </i>Sair</a>

                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
