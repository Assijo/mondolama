@extends('plantillas/menuLogin')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <form class="text-center">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-dark">Ingresar</button>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>


@endsection