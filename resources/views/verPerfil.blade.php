@extends('plantillas/menuNavegacion')
@extends('modales/agregarFoto')
@extends('modales/agregarProyecto')
@extends('modales/modificarProyecto')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
        <div class="row align-items-center">
            <div class="col-10"></div>
            <div class="col-2 d-flex align-items-start">
                <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#agregarProyecto">Modificar datos</button>
            </div>
        </div>
        <div class="row my-5 align-items-center">
            <div class="col-3"></div>
            <div class="col-6 table-responsive">
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
                            <td>Juan Francisco Aarón</td>
                        <tr>
                            <td scope="row">Apellido paterno</td>
                            <td>Ponce</td>
                        </tr>
                        <tr>
                            <td scope="row">Apellido materno</td>
                            <td>FLores</td>
                        </tr>
                        <tr>
                            <td scope="row">Fecha de nacimiento</td>
                            <td>05/05/2001</td>
                        </tr>
                        <tr>
                            <td scope="row">Teléfono</td>
                            <td>+52 235 236 56 12</td>
                        </tr>
                        <tr>
                            <td scope="row">Correo</td>
                            <td>juanfranciscoaaronponceflores@gmail.com</td>
                        </tr>
                        <tr>
                            <td scope="row">Contraseña</td>
                            <td>juanfranciscoaaronponceflore@12345</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection