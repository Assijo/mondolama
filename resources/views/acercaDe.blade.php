@extends('plantillas/menuBanner')
@section('contenido')

@foreach($banner as $b)
<div id="banner" class="banner" style="background: url({{ asset('storage/'.$b->imagen)}})">
@endforeach
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <img src="{{ asset('images/mondolama.jpg') }}" width="200px" height="200px">
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row my-5">
        <div class="col my-5">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/g59BY-nDJgw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h3><b>Descripción</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3><b>Misión</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3><b>Visión</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3><b>Valores</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>    
    </div>
    <div class="row">
        <div class="col">
            <h3><b>Políticas</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div> 
    </div>
    <div class="row">
        <div class="col">
            <h3><b>Objetivos</b></h3>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</div>

<a href="#banner" class="btn scroll-to-top ml-auto">
  <svg width="20px" height="20px" viewBox="0 0 490 490" class="svg">
    <path d="M479.9,256c-2.8,0-5.5-1.1-7.6-3.1L245.2,25.7L18.1,252.9c-4.2,4.1-11,4-15.1-0.3c-4-4.1-4-10.7,0-14.8L237.7,3.1
    c4.2-4.2,10.9-4.2,15.1,0l234.7,234.7c4.2,4.2,4.1,10.9,0,15.1C485.4,254.9,482.7,256,479.9,256z"/>
  </svg>
</a>

@endsection