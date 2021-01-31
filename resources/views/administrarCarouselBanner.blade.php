@extends('plantillas/menuNavegacion')
@include('modales/agregarBanner')
@include('modales/agregarImagen')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">

        <h3 class="text-center">Banner</h3>
        <hr class="mx-auto w-75">

        <div class="col d-flex align-items-start">
            <button type="button" class="btn btn-dark mx-auto my-5" data-toggle="modal" data-target="#agregarImagen">Agregar imagen</button>
        </div>

        <h3 class="text-center my-5">Carousel</h3>
        <hr class="mx-auto w-75">

            <div class="col d-flex align-items-start">
                <button type="button" class="btn btn-dark ml-auto mt-5" data-toggle="modal" data-target="#agregarBanner">Agregar banner</button>
            </div>
        </div>
        <div class="row my-5 align-items-center">
            <div class="col table-responsive">
                <table class="table w-75 mx-auto">
                    <thead>
                        <tr>
                        <th scope="col">Banner</th>
                        <th scope="col">Titutlo</th>
                        <th scope="col">Subtitulo</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carousel as $c)
                        <tr>
                            <td><img src="{{asset('storage/'.$c->imagen)}}" class="w-25"></td>
                            <td>{{$c->titulo}}</td>
                            <td>{{$c->subtitulo}}</td>
                            <td>
                                <div class="d-flex flex-row">
                                    <div class="d-flex mx-1">
                                        <a data-toggle="modal" data-target="#modificarBanner{{ $c->id_carousel }}">
                                            <svg width="14px"
                                            height="14px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                            <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                            M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                            C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                            c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a data-toggle="modal" data-target="#eliminarBanner{{ $c->id_carousel }}">
                                            <svg width="14px"
                                                height="14px" viewBox="0 0 298.7 298.7" style="enable-background:new 0 0 298.7 298.7;" xml:space="preserve">
                                            <path class="st0" d="M298.7,30.2L268.5,0L149.3,119.1L30.2,0L0,30.2l119.1,119.1L0,268.5l30.2,30.2l119.1-119.1l119.1,119.1
                                                l30.2-30.2L179.5,149.3L298.7,30.2z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('modales/modificarBanner')
                        @include('modales/eliminarBanner')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

  
@endsection
