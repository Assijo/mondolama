@extends('plantillas/encabezadoYPieDePagina')
@section('menu')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <nav class="navbar">
        <a class="navbar-brand" href="#">
            <img src="images/casa.svg" width="60" height="60" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Ver usuarios<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Activar/Desactivar proyectos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ver proyectos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ver vendedores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Realizar pago</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@yield('menuItem6Dropdown')
            Ver pagos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Pagos a empleados</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Pagos de clientes</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Aprobar pagos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ver documentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ver perfil</a>
        </li>
        </ul>
    </div>
</nav>

@endsection