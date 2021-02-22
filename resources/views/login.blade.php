@extends('plantillas/menuLogin')
@include('modales/cuentaRecuperar')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card custom-card text-center mx-auto">
                <div class="card-body">
                    <h5 class="card-title mt-3 mb-4">Iniciar sesión</h5>
                    <p class="card-text">
                        <form class="text-center" method="POST" action="{{url('/login')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pasword" placeholder="Contraseña">
                            </div>
                            <button type="submit" class="btn btn-dark my-3">Ingresar</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col text-center">
            <a data-toggle="modal" data-target="#cuentaRecuperar" class="enlace-recuperar-contrasena">¿Olvidaste la contraseña?</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="{{url('registro')}}" class="enlace-recuperar-contrasena">Crear cuenta</a>
        </div>
    </div>
</div>

@endsection
