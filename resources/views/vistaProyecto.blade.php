@extends('plantillas/menuBanner')
@section('contenido')
@foreach($proyectos as $p)
<div id="banner" class="banner">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <img width="100px" height="100px" src="{{ asset('storage/'.$p->logotipo)}}">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col text-center">
                <h2><b>{{$p->nombre}}</b></h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col text-center">
                <h4><b>{{$p->eslogan}}</b></h4>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-2 col-md-4 text-center">
                <svg width="12px" height="12px" viewBox="0 0 400 512" class="svg">
                    <path class="st0" d="M181.3,0C81.3,0,0,81.3,0,181.3c0,96.7,165.8,317.1,172.8,326.4c2,2.7,5.2,4.2,8.5,4.2s6.5-1.6,8.5-4.2
                    c7.1-9.3,172.8-229.7,172.8-326.4C362.7,81.3,281.3,0,181.3,0z M181.3,277.3c-52.9,0-96-43.1-96-96s43.1-96,96-96s96,43.1,96,96
                    S234.3,277.3,181.3,277.3z"/>
                </svg>
                {{$p->ubicacion}}
            </div>
            <div class="col-sm-2 col-md-4 text-center">
                <svg width="12px" height="12px" viewBox="0 0 400 512" class="svg">
                    <path d="M512,248.7L512,248.7L512,248.7z M168.2,431.5l49-49c-58.7-13.8-103-65.4-105.8-127.6l-55.8-55.8L0,254.6
                    C2.9,378,94.8,476.9,210.6,494.5l-42.5-42.5C162.5,446.4,162.5,437.2,168.2,431.5z M329.2,65.9l-49,49
                    c62,14.7,103.1,68.2,105.8,127.6l55.8,55.8l55.6-55.6C494.5,119.4,402.6,20.5,286.7,2.8l42.5,42.5C334.9,51,334.9,60.2,329.2,65.9
                    L329.2,65.9z M65.9,168.2l49,49c14.7-62,68.2-103.1,127.6-105.8l55.8-55.8L242.7,0C119.4,2.9,20.5,94.8,2.8,210.6l42.5-42.5
                    C51,162.5,60.2,162.5,65.9,168.2z M431.5,329.2l-49-49c-13.8,58.7-65.4,103-127.6,105.8l-55.8,55.8l55.6,55.6
                    c123.3-2.9,222.2-94.8,239.9-210.6l-42.5,42.5C446.4,334.9,437.2,334.9,431.5,329.2L431.5,329.2z"/>
                </svg>
                {{$p->fase}}
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
            
<div class="container my-5">
    <div class="row my-5">
        <div class="col my-5">
            <video class="w-100" controls>
                <source src="{{ asset('storage/'.$p->video)}}">
            </video> 
        </div>
    </div>
</div>

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @php
                $i = 0;
            @endphp
            @foreach($fotos as $fotos)
                @if($i === 0)
                    <div class="carousel-item active">
                        <img src="{{asset('storage/'.$fotos->foto)}}" class="d-block w-100">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{asset('storage/'.$fotos->foto)}}" class="d-block w-100">
                    </div>
                @endif
                @php
                    $i ++;
                @endphp
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mb-5">
    <div class="row my-5">
        <div class="col">
            {{$p->descripcion}}
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h6>
                <b>
                    @if($p->precio === null)
                    PRECIO: ${{$p->precio_lote}} MXN
                    @else
                    PRECIO DEL LOTE: ${{$p->precio}} MXN
                    @endif
                </b>
            </h6>
        </div>
    </div>
</div>

<a href="#banner" class="btn scroll-to-top ml-auto">
  <svg width="20px" height="20px" viewBox="0 0 490 490" class="svg">
    <path d="M479.9,256c-2.8,0-5.5-1.1-7.6-3.1L245.2,25.7L18.1,252.9c-4.2,4.1-11,4-15.1-0.3c-4-4.1-4-10.7,0-14.8L237.7,3.1
    c4.2-4.2,10.9-4.2,15.1,0l234.7,234.7c4.2,4.2,4.1,10.9,0,15.1C485.4,254.9,482.7,256,479.9,256z"/>
  </svg>
</a>
@endforeach
@endsection