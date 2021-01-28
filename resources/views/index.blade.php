@extends('plantillas/menuIndex')
@section('contenido')

<div id="carouselExampleCaptions" class="carousel slide custom-carousel" data-ride="carousel">
  <ol class="carousel-indicators">
    @php
        $i = 0;
    @endphp
    @foreach($carousel as $c)
        @if($i === 0)
      <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}" class="active"></li>
        @else
      <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}"></li>
        @endif
          @php
              $i ++;
          @endphp
    @endforeach
  </ol>
  <div class="carousel-inner">
    @php
        $i = 0;
    @endphp
    @foreach($carousel as $c)
        @if($i === 0)
        <div class="carousel-item active">
          <img src="{{asset('storage/'.$c->imagen)}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{$c->titulo}}</h3>
            <p>{{$c->subtitulo}}</p>
          </div>
        </div>
        @else
        <div class="carousel-item">
          <img src="{{asset('storage/'.$c->imagen)}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{$c->titulo}}</h3>
            <p>{{$c->subtitulo}}</p>
          </div>
        </div>
        @endif
        @php
            $i ++;
        @endphp
    @endforeach
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


<div class="container mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="row row-cols-3">
            @foreach($proyectos as $p)
                <div class="col">
                    <div class="row">
                        <div class="col">
                        <h6><b>{{$p->nombre}}</b></h6>
                        </div>
                    </div>
                    <div class="row mt-3 mb-5">
                        <div class="col wow animate__slideInUp animate__delay-5s">
                            <img src="{{asset('storage/'.$p->imagen_principal)}}" class="img-fluid">
                            <div class="p-tamano-definido mt-3">
                                {!! ($p->descripcion) !!}
                                <p class="contenedor-descripcion">
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                        @if($p->precio === null)
                            <h6>
                                <b>
                                    Precio por lote: ${{$p->precio_lote}} MXN
                                </b>
                            </h6>
                        @else
                            <h6>
                                <b>
                                    Precio: ${{$p->precio}} MXN
                                </b>
                            </h6>
                        @endif
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col text-center wow fadeInDown">
                            <a href="{{url('/vistaproyecto',[$p->id_proyecto])}}" type="button" class="btn btn-ver mx-auto">Ver</a>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-1"></div>
    </div>    
</div>



<a href="#custom-navbar" class="btn scroll-to-top ml-auto">
  <svg width="20px" height="20px" viewBox="0 0 490 490" class="svg">
    <path d="M479.9,256c-2.8,0-5.5-1.1-7.6-3.1L245.2,25.7L18.1,252.9c-4.2,4.1-11,4-15.1-0.3c-4-4.1-4-10.7,0-14.8L237.7,3.1
    c4.2-4.2,10.9-4.2,15.1,0l234.7,234.7c4.2,4.2,4.1,10.9,0,15.1C485.4,254.9,482.7,256,479.9,256z"/>
  </svg>
</a>

@endsection