@extends('plantillas/menuCliente')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
        <div class="row align-items-center mb-5">
            <div class="col">
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">
                        <svg viewBox="0 0 500 500" width="14px"
                        height="24px">
                            <path fill="white" d="M356.5,303.3c20.9-31,33.1-68.4,33.1-108.5C389.6,87.4,302.2,0,194.8,0S0,87.4,0,194.8s87.4,194.8,194.8,194.8
                            c40.9,0,78.9-12.7,110.3-34.3l155.2,154.6l51.7-51.7L356.5,303.3z M194.8,334.9C117.7,334.9,55,272.2,55,195.1
                            C55,118,117.7,55.3,194.8,55.3S334.6,118,334.6,195.1S271.9,334.9,194.8,334.9z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active custom-tab" data-toggle="tab" role="tab" href="#primeraTablaPagos" aria-controls="primeraTablaPagos" aria-selected="true">Pagos interiores</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link custom-tab" data-toggle="tab" role="tab" href="#segundaTablaPagos" aria-controls="segundaTablaPagos" aria-selected="false">Pagos exteriores</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <div id="primeraTablaPagos" class="tab-pane fade show active" rol="tabpanel" aria-labelledby="primeraTablaPagos-tab">
                        <div class="row my-5 align-items-center">
                            <div class="col table-responsive">
                                <table class="table tabla tabla-letra-normal">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="4" class="text-center th">Datos del proyecto</th>
                                            <th scope="col" class="th1"></th>
                                            <th scope="col" colspan="2" class="text-center th">Datos del pago</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fase</th>
                                            <th scope="col">Manzana</th>
                                            <th scope="col">Lote</th>
                                            <th scope="col" class="th"></th>
                                            <th scope="col">Monto MXN</th>
                                            <th scope="col">Fecha y hora</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="segundaTablaPagos" class="tab-pane fade" rol="tabpanel" aria-labelledby="segundaTablaPagos-tab">
                        <div class="row my-5 align-items-center">
                            <div class="col table-responsive">
                                <table class="table tabla">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="4" class="text-center th">Datos del proyecto</th>
                                            <th scope="col" class="th1"></th>
                                            <th scope="col" colspan="2" class="text-center th">Datos del pago</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fase</th>
                                            <th scope="col">Manzana</th>
                                            <th scope="col">Lote</th>
                                            <th scope="col" class="th"></th>
                                            <th scope="col">Monto MXN</th>
                                            <th scope="col">Fecha y hora</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                        <tr>
                                            <td>Fraccionamiento "Las Pilitas" de Pto. Vallarta</td>
                                            <td>4</td>
                                            <td>M4</td>
                                            <td>L10</td>
                                            <td></td>
                                            <td>5,600.56</td>
                                            <td>2020-05-12 09:12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection