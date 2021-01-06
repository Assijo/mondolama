@extends('plantillas/menuCliente')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
        <div class="row align-items-center">
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
        <div class="row my-5 align-items-center">
            <div class="col table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio del lote MXN</th>
                            <th scope="col">Fase</th>
                            <th scope="col">Ubicación</th>
                            <th scope="col">Manzana</th>
                            <th scope="col">Lote</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Fraccionamiento "Las Pilitas"</td>
                            <td>150,000.00</td>
                            <td>3 Adecuada al área</td>
                            <td>Puerto Vallarta, Jalisco</td>
                            <td>M1</td>
                            <td>L1</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Fraccionamiento "Las Pilitas"</td>
                            <td>150,000.00</td>
                            <td>3 Adecuada al área</td>
                            <td>Puerto Vallarta, Jalisco</td>
                            <td>M1</td>
                            <td>L1</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Fraccionamiento "Las Pilitas"</td>
                            <td>150,000.00</td>
                            <td>3 Adecuada al área</td>
                            <td>Puerto Vallarta, Jalisco</td>
                            <td>M1</td>
                            <td>L1</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex align-items-start">
                <button type="button" class="btn btn-dark mx-auto" data-toggle="modal" data-target="#agregarProyecto">Pagar</button>
            </div>
        </div>
    </div>
@endsection