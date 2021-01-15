@extends('plantillas/menuIndex')
@section('contenido')

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/unsplash6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/unsplash5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/unsplash4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@foreach($proyectos as $p)
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-1">
        </div>
        <div class="col">
            <h6><b>{{$p->nombre}}</b></h6>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row mt-3 mb-5">
        <div class="col-md-1">
        </div>
        <div class="col">
            <img src="images/casas.jpg" class="img-fluid">
          <div class="p-tamano-definido mt-3">
          {{$p->descripcion}}
          <p class="contenedor-descripcion">.</p>
          </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-1">
        </div>
        <div class="col">
            <h6><b>{{$p->precio_lote}}</b></h6>
            <h6><b>{{$p->precio}}</b></h6>
        </div>
        <div class="col-md-1">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-1">
        </div>
        <div class="col text-center">
            <a href="{{url('/vistaproyecto',[$p->id_proyecto])}}" type="button" class="btn btn-success btn-ver mx-auto">Ver</a>
        </div> 
        <div class="col-md-1">
        </div>
    </div>    
</div>

@endforeach

<a href="#custom-navbar" class="btn scroll-to-top ml-auto">
  <svg width="20px" height="20px" viewBox="0 0 490 490" class="svg">
    <path d="M479.9,256c-2.8,0-5.5-1.1-7.6-3.1L245.2,25.7L18.1,252.9c-4.2,4.1-11,4-15.1-0.3c-4-4.1-4-10.7,0-14.8L237.7,3.1
    c4.2-4.2,10.9-4.2,15.1,0l234.7,234.7c4.2,4.2,4.1,10.9,0,15.1C485.4,254.9,482.7,256,479.9,256z"/>
  </svg>
</a>

@endsection