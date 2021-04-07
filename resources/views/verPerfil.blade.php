@if(session()->has('sesionAdminMaster') || session()->has('sesionAdmin'))
    @extends('plantillas/menuNavegacion')
@elseif(session()->has('sesionVendedor'))
    @extends('plantillas/menuVendedor')
@else
    @extends('plantillas/menuCliente')
@endif
@section('contenido')
@foreach($usuario as $u)
    @if(!session()->has('sesionAdminMaster'))
        <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
            <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-4 col-md-2 d-flex align-items-start">
                    <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#modificarDatos">Modificar datos</button>
                </div>
                <div class="col-4 col-md-2 d-flex align-items-start">
                    <form action="{{url('/logout')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                        <button type="submit" class="btn btn-dark ml-auto text-white">Cerrar sesión</button>
                    </form>
                </div>
                <div class="col-4 col-md-2 d-flex align-items-start">
                    <button type="button" class="btn btn-dark ml-auto btn-desactivar-cuenta">Desactivar cuenta</button>
                </div>
            </div>
            <div class="row my-5 align-items-center">
                <div class="col-0 col-md-2"></div>
                <div class="col col-md-8 table-responsive mx-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Dato</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Nombre</td>
                                <td>{{ $u->nombre }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Apellido paterno</td>
                                <td>{{ $u->ap_paterno }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Apellido materno</td>
                                <td>{{ $u->ap_materno }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Fecha de nacimiento</td>
                                <td>{{ $u->fecha_nacimiento }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Teléfono</td>
                                <td>{{ $u->telefono }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Correo</td>
                                <td>{{ $u->correo }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Contraseña</td>
                                <td>{{ $u->contrasena }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
        </div>
    @else
        <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
            <div class="row align-items-center">
                <div class="col-md-8"></div>
                <div class="col-6 col-md-2 d-flex align-items-start">
                    <button type="button" class="btn btn-dark ml-sm- ml-auto" data-toggle="modal" data-target="#modificarDatos">Modificar datos</button>
                </div>
                <div class="col-6 col-md-2 d-flex align-items-start">
                    <form action="{{url('/logout')}}" method="post" enctype="multipart/form-data" class="text-center">
                    @csrf
                        <button type="submit" class="btn btn-dark ml-auto text-white">Cerrar sesión</button>
                    </form>
                </div>
            </div>
            <div class="row my-5 align-items-center">
                <div class="col-3"></div>
                <div class="col-sm-6 table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Dato</th>
                                <th scope="col">Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">Nombre</td>
                                <td>{{ $u->nombre }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Apellido paterno</td>
                                <td>{{ $u->ap_paterno }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Apellido materno</td>
                                <td>{{ $u->ap_materno }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Fecha de nacimiento</td>
                                <td>{{ $u->fecha_nacimiento }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Teléfono</td>
                                <td>{{ $u->telefono }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Correo</td>
                                <td>{{ $u->correo }}</td>
                            </tr>
                            <tr>
                                <td scope="row">Contraseña</td>
                                <td>{{ $u->contrasena }}</td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    @endif
@include('modales/modificarDatos')
@endforeach
@endsection