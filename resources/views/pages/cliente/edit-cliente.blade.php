@extends('pages.layouts.layout')
@section('title', 'Editar Cliente')
@section('content')

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">
    <!-- Coloque aqui a imagem de fundo desejada para a seção de introdução (carousel). Você pode usar estilos inline ou classes CSS para definir a imagem de fundo. -->
    <div class="swiper-wrapper">
        <!-- Os slides do carousel aqui -->
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">
    <!-- Conteúdo da página de edição do cliente -->
    <section class="section-client-edit section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Editar Cliente</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Formulário de edição de cliente -->
                    <form action="" method="">


                        <!-- Campos do formulário para edição de cliente -->
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control" value="" required>
                        </div>

                        <!-- Adicione mais campos conforme necessário -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Outros conteúdos da página, se necessário -->
</main>

@endsection
