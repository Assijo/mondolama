@extends('plantillas/menuLogin')
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card custom-card text-center mx-auto">
                <div class="card-body">
                    <h5 class="card-title mt-3 mb-4">Crear cuenta</h5>
                    <p class="card-text">
                        <form  action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido paterno" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido materno" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <select class="form-control" id="id_tipo_usuario" name="id_tipo_usuario" id="exampleFormControlSelect1">
                                        <option value="2" selected>Administrador</option>
                                        <option value="3">Vendedor</option>
                                        <option value="4">Cliente</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3 mb-n3 text-center">
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
