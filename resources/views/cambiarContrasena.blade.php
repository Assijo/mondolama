@extends('plantillas/menuLogin')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card custom-card text-center mx-auto">
                <div class="card-body">
                    <h5 class="card-title mt-3 mb-4">Cambiar contraseña</h5>
                    <p class="card-text">
                        <form class="text-center">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nueva contraseña">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar contraseña">
                            </div>
                        </form>
                    </p>
                    <button type="submit" class="btn btn-dark my-3">Cambiar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection