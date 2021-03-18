@extends('plantillas/menuNavegacion')
@section('contenido')
<div class="container py-5 my-5">
    <div class="row">
        <div class="col">
            <h4 class="text-center mx-auto py-5 font-weight-bold">PROYECTO: FRACCIONAMIENTO "LAS PILITAS"</h4>
            <h5 class="text-center mx-auto py-5">Apartar lotes</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-0 col-md-3">
        </div>
        <div class="col-6 col-md-3 text-center">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <div class="btn-group" role="group">                        
                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-dark dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>                     
                    <div class="dropdown-menu rounded-0" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item d-flex flex-nowrap" href="#">Dropdown link
                            <div class="custom-control custom-switch ml-3">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex flex-nowrap" href="#">Dropdown link
                            <div class="custom-control custom-switch ml-3">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"></label>
                            </div>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 text-center">
            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop4" type="button" class="btn btn-dark dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </button>
                    <div class="dropdown-menu rounded-0" aria-labelledby="btnGroupVerticalDrop4">
                        <a class="dropdown-item d-flex flex-nowrap" href="#">Dropdown link
                            <div class="custom-control custom-switch ml-3">
                                <input type="checkbox" class="custom-control-input" id="customSwitch31">
                                <label class="custom-control-label" for="customSwitch31"></label>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex flex-nowrap" href="#">Dropdown link
                            <div class="custom-control custom-switch ml-3">
                                <input type="checkbox" class="custom-control-input" id="customSwitch32">
                                <label class="custom-control-label" for="customSwitch32"></label>
                            </div>
                        </a> 
                    </div>
                </div>
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