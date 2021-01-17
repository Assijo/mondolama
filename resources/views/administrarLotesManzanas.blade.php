@extends('plantillas/menuNavegacion')
@section('contenido')
<div class="container py-5 my-5">
    <div class="row">
        <div class="col">
            <h4 class="text-center mx-auto py-5 font-weight-bold">Proyecto</h4>
            
            <h5 class="text-center mx-auto py-5">Agregar, modificar y eliminar manzanas y lotes</h5>
        </div>
    </div>
        <div class="row">
            <div class="col-xs-0 col-md-3">
            </div>
            <div class="col-6 col-md-6 text-center">
                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <div class="btn-group" role="group">                        
                        <a href="#" id="btnGroupVerticalDrop4" type="button" class="btn btn-dark dropdown-toggle rounded-0 d-flex flex-nowrap align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input class="form-control input-dropdown" type="text" placeholder="manzana1">
                        </a>
                        <div class="close-div d-flex align-items-center">                        
                            <button type="button" class="close" aria-label="Close">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="dropdown-menu rounded-0" aria-labelledby="btnGroupVerticalDrop4">
                        
                            <a class="dropdown-item d-flex flex-nowrap" href="#">
                                <input class="form-control input-dropdown-item" type="text" placeholder="lote1">
                                <button type="button" class="close-reverse" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </a>
                            <button type="button" class="plus-dropdown-item" aria-label="Plus">
                                <span>&plus;</span>
                            </button> 
                        </div>
                    </div>
                    <button type="button" class="plus-dropdown" aria-label="Plus">
                        <span>&plus;</span>
                    </button>
                </div>
            </div>
            <div class="col-xs-0 col-md-3">
            </div>
        </div>
    <div class="row">
        <div class="col text-center">
            <button type="button" class="btn btn-dark mx-auto my-5">Regresar</button>
        </div>
    </div>
</div>
@endsection