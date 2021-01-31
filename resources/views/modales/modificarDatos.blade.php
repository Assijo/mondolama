<!-- Modal -->
<div class="modal fade" id="modificarDatos" tabindex="-1" role="dialog" aria-labelledby="modificarDatosLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="modificarDatosLabel">Modificar usuario</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
                <form  action="{{url('/modificarusuario')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $u->nombre }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{ $u->telefono }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ap_pat" name="ap_pat" placeholder="Apellido paterno" value="{{ $u->ap_paterno }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="{{ $u->correo }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ap_mat" name="ap_mat" placeholder="Apellido materno" value="{{ $u->ap_materno }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" value="{{ $u->contrasena }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="Fecha de nacimiento" value="{{ $u->fecha_nacimiento }}">
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" disabled>
                                <option selected>Administrador máster</option>
                                <option>...</option>
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
            </div>
            <div class="modal-footer d-none">
            </div>
        </div>
    </div>
</div>