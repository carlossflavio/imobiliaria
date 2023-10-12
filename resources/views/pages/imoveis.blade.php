@extends ('pages.layouts.layout')
@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Nossos Imóveis</h1>
                        <span class="color-text-a">Todos Imóveis</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Todos Imóveis
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="grid-option">
                        <form>
                            <select class="custom-select">
                                <option selected>Todos</option>
                                <option value="1">Arrendar</option>
                                <option value="2">Comprar</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($imoveis as $imovel)
                            <div class="col-md-4">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a">
                                        <img src="{{ asset($imovel->imagem_frontal) }}" alt="{{ $imovel->titulo }}"
                                            class="img-a img-fluid">
                                    </div>
                                    <div class="card-overlay">
                                        <div class="card-overlay-a-content">
                                            <div class="card-header-a">
                                                <h2 class="card-title-a">
                                                    <a
                                                        href="{{ route('pages.imoveis', $imovel->id) }}">{{ $imovel->titulo }}</a>
                                                </h2>
                                            </div>
                                            <div class="card-body-a">
                                                <div class="price-box d-flex">
                                                    <span class="price-a">{{ $imovel->tipo_negociacao }} | $
                                                        {{ $imovel->preco }}</span>
                                                </div>
                                                <a href="{{ route('pages.imoveis', $imovel->id) }}" class="link-a">Clique
                                                    aqui para ver
                                                    mais
                                                    <span class="bi bi-chevron-right"></span>
                                                </a>
                                            </div>
                                            <div class="card-footer-a">
                                                <ul class="card-info d-flex justify-content-around">
                                                    <li>
                                                        <h4 class="card-info-title">Area</h4>
                                                        <span>{{ $imovel->area }} <sup>2</sup></span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">Quartos</h4>
                                                        <span>{{ $imovel->quartos }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">Quartos de banho</h4>
                                                        <span>{{ $imovel->banheiros }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">Garagens</h4>
                                                        <span>{{ $imovel->garagens }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- <div class="row">
    <div class="col-sm-12">
        <nav class="pagination-a">
            {{ $imoveis->links() }}
        </nav>
    </div>
</div> --}}

            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="bi bi-chevron-left"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        
    </section><!-- End Property Grid Single-->
@endsection
