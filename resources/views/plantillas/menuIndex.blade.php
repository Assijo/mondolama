@extends('plantillas/encabezadoYPieDePagina')
@section('menu')
<nav id="custom-navbar" class="navbar navbar-expand-sm custom-navbar" height="100px">
    <nav class="navbar">
      <a class="navbar-brand" href="{{url('index')}}">
          <img src="{{ asset('images/hoja.svg') }}" width="60" height="60" alt="" loading="lazy" class="img-logo-index">
      </a>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link custom-navbar-link" href="{{url('index')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-navbar-link" href="{{url('login')}}">Iniciar sesión</a>
      </li>
      <li class="nav-item">
        <a class="nav-link custom-navbar-link" href="{{url('acercade')}}">Acerca de nosotros</a>
      </li>
    </ul>
  </div>
</nav>
@endsection