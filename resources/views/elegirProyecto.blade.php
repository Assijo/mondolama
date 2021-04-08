@extends('plantillas/menuVendedor')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">


        <div class="row align-items-center">
            <!--
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
            -->
        </div>
        <div class="row my-5 align-items-center">
            <div class="col table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio total MXN</th>
                        <th scope="col">Precio por lote MXN</th>
                        <th scope="col">Fase</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyectos as $p)
                            <tr>
                                <td>{{$p->nombre}}</td>
                                <td>{{$p->precio}}</td>
                                <td>{{$p->precio_lote}}</td>
                                <td>{{$p->fase}}</td>
                                <td>{{$p->ubicacion}}</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        @if($p->id_tipo_proyecto === 3)
                                            <div class="d-flex mx-1">
                                                <a href="{{  url('/apartarlotes',[$p->id_proyecto])}}">
                                                    <svg width="14px" height="14px" viewBox="0 0 292.6 281.4">
                                                    <path id="UniÃ³n_20_1_" d="M154.2,281.4c-4.2,0-7.6-3.4-7.6-7.6v-65.7c0-1.4-1.1-2.5-2.5-2.5H98.6c-1.4,0-2.5,1.1-2.5,2.5l0,0v65.7
                                                        c0,4.2-3.4,7.6-7.6,7.6h-43c-8.4,0-15.1-6.8-15.2-15.2v-96.1H12.6c-6.9,0-12.5-5.6-12.6-12.6c0-3.4,1.4-6.6,3.7-9L116.1,41
                                                        c2.9-2.8,7.6-2.8,10.5,0l10.5,10.1v46.1c0,2.3,1.9,4.2,4.2,4.2l0,0h48.5l49,47c2.4,2.4,3.8,5.7,3.8,9.1c0,6.9-5.6,12.5-12.6,12.6
                                                        h-17.7v96.1c0,8.4-6.8,15.1-15.2,15.2L154.2,281.4z M229.3,123.8c-1.1-0.5-1.9-1.6-1.8-2.8V88.7h-73.9c-1.6,0-2.9-1.3-2.9-2.9V38.5
                                                        c0-1.6,1.3-2.9,2.9-2.9h73.9V3c0-1.2,0.7-2.3,1.8-2.8c1.1-0.4,2.4-0.2,3.2,0.6l59.2,58.9c0.6,0.6,0.9,1.3,0.9,2.1
                                                        c0,0.8-0.3,1.5-0.9,2.1l-59.1,59.1c-0.6,0.6-1.3,0.9-2.1,0.9C230.1,124,229.7,123.9,229.3,123.8z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        @else
                                            <div class="custom-control custom-switch ml-2 mt-n1">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1"></label>
                                            </div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
