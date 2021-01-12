@extends('plantillas/encabezadoYPieDePagina')
@extends('modales/cargarComprobantePago')
@section('menu')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <nav class="navbar">
            <a class="navbar-brand" href="{{url('index')}}">
                <img src="images/hoja.svg" width="40" height="40" alt="" loading="lazy">
            </a>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Realizar pago
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Interior</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#cargarComprobantePago">Exterior</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('verpagos')}}">Ver pagos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('verdocumentos')}}">Ver documentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('verperfildesactivar')}}">Ver perfil</a>
            </li>
        </ul>
    </div>
</nav>

@endsection