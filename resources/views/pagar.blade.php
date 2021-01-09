@extends('plantillas/menuNavegacion')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card custom-card text-center mx-auto">
                <div class="card-body">
                    <h5 class="card-title mt-3 mb-4">Realizar pago</h5>
                    <p class="card-text">
                        <form id="pago" class="text-center" method="POST" action="pago" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="number" class="form-control" id="monto" name="monto" aria-describedby="monto" placeholder="Monto">
                                <input type="hidden" id="idpersona" name="idpersona" value="{{$persona}}">
                            </div>
                            <!--<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
                            <img width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">-->
                            <button type="submit" class="btn btn-dark my-3">Pagar</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection