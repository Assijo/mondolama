@extends('plantillas/encabezadoYPieDePagina')
@include('modales/agregarUsuario')
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
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#agregarUsuario">Registrar cliente<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pagosaprobar')}}">Aprobar pagos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('elegirproyecto')}}">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('verperfildesactivar')}}">Ver perfil</a>
            </li>
        </ul>
    </div>
</nav>

@endsection