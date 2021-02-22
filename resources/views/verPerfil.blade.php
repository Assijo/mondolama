@extends('plantillas/menuNavegacion')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
        <div class="row align-items-center">
            <div class="col-md-8"></div>
            <div class="col-6 col-md-2 d-flex align-items-start">
                <button type="button" class="btn btn-dark ml-sm- ml-auto" data-toggle="modal" data-target="#modificarDatos">Modificar datos</button>
            </div>
            <div class="col-6 col-md-2 d-flex align-items-start">
                <form class="text-center" method="POST" action="{{url('/logout')}}" enctype="multipart/form-data">
                @csrf
                    <a type="submit" class="btn btn-dark ml-auto">Cerrar sesión</a>
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
                        @foreach($usuario as $u)
                        <tr>
                            <td scope="row">Nombre</td>
                            <td>{{ $u->nombre }}</td>
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
                        @include('modales/modificarDatos')
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection