@extends('plantillas/encabezadoYPieDePagina')
@section('menu')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <nav class="navbar">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/mondolama.jpg') }}" width="40" height="40" alt="" loading="lazy">
            </a>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('administrarproyectos')}}">Administrar proyectos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('administrarcarouselbanner')}}">Administrar carousel y banner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('usuarios')}}">Ver usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('vendedoresproyectos')}}">Ver vendedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('empleados')}}">Realizar pago</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ver pagos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{url('pagosempleados')}}">Pagos a empleados</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('pagosclientes')}}">Pagos de clientes</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('pagosaprobar')}}">Aprobar pagos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('documentosclientes')}}">Ver documentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('verperfil')}}">Ver perfil</a>
            </li>
        </ul>
    </div>
</nav>

@endsection