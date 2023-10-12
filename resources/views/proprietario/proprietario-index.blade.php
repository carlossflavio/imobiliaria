@extends('admin.layouts.app')
@section('title', 'Proprietário-Imobiliária ')
@section('content')


    <div class="row quick-action-toolbar">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Principais Funcionalidades</h5>
                    <p class="ml-auto mb-0"><i class="icon-bulb"></i></p>
                </div>
                <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                        <button type="button" class="btn px-0"> <i class=" icon-user-follow mr-2"></i>Adicionar Funcionário</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                        <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Criar Fatura</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                        <button type="button" class="btn px-0"><i class="icon-calendar mr-2"></i> Verificar agendamentos</button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                        <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Serviços</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Action Toolbar Ends-->
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                <h5 class="font-weight-semibold">Informações Gerais</h5> <span class="ml-auto">Actualizar</span> <button class="btn btn-icons border-0 p-2"><i
                                        class="icon-refresh"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                        <div class=" col-md -6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Imóveis</span>
                                <h4>Temos:</h4>
                                <span class="report-count"> 10 </span>
                            </div>
                            <div class="inner-card-icon bg-success">
                                <i class="icon-home"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Negociações</span>
                                <h4>Temos:</h4>
                                <span class="report-count"> 2 </span>
                            </div>
                            <div class="inner-card-icon bg-danger">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Clientes</span>
                                <h4>Temos:</h4>
                                <span class="report-count"> 3 </span>
                            </div>
                            <div class="inner-card-icon bg-warning">
                                <i class="icon-people"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Funcionários</span>
                                <h4>Temos:</h4>
                                <span class="report-count"> 8 </span>
                            </div>
                            <div class="inner-card-icon bg-primary">
                                <i class="icon-diamond"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Imóveis</h4>
                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> Ver Todos os Imóveis</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">Store ID</th>
                                    <th class="font-weight-bold">Amount</th>
                                    <th class="font-weight-bold">Gateway</th>
                                    <th class="font-weight-bold">Created at</th>
                                    <th class="font-weight-bold">Paid at</th>
                                    <th class="font-weight-bold">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face1.jpg"
                                            alt="profile image"> Katie Holmes
                                    </td>
                                    <td>$3621</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2">
                                        alipay</td>
                                    <td>04 Jun 2019</td>
                                    <td>18 Jul 2019</td>
                                    <td>
                                        <div class="badge badge-success p-2">Paid</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face2.jpg"
                                            alt="profile image"> Minnie Copeland
                                    </td>
                                    <td>$6245</td>
                                    <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2">
                                        Paypal</td>
                                    <td>25 Sep 2019</td>
                                    <td>07 Oct 2019</td>
                                    <td>
                                        <div class="badge badge-danger p-2">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face3.jpg"
                                            alt="profile image"> Rodney Sims
                                    </td>
                                    <td>$9265</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2">
                                        alipay</td>
                                    <td>12 dec 2019</td>
                                    <td>26 Aug 2019</td>
                                    <td>
                                        <div class="badge badge-warning p-2">Failed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face4.jpg"
                                            alt="profile image"> Carolyn Barker
                                    </td>
                                    <td>$2263</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2">
                                        alipay</td>
                                    <td>30 Sep 2019</td>
                                    <td>20 Oct 2019</td>
                                    <td>
                                        <div class="badge badge-success p-2">Paid</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap">
                        <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                        <nav class="ml-auto">
                            <ul class="pagination separated pagination-info">
                                <li class="page-item"><a href="#" class="page-link"><i
                                            class="icon-arrow-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i
                                            class="icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
