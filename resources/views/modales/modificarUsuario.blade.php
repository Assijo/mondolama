<!-- Modal -->
<div class="modal fade" id="modificarUsuario{{$u->id_persona}}" tabindex="-1" role="dialog" aria-labelledby="modificarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="modificarUsuarioLabel">Modificar usuario</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
                <form action="{{route('usuarios.update',$u->id_persona)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$u->nombre}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$u->telefono}}">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" value="{{$u->ap_paterno}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="email" class="form-control" id="correo" name="correo" value="{{$u->correo}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ap_materno" name="ap_materno" value="{{$u->ap_materno}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" class="form-control" id="contrasena" name="contrasena" value="{{$u->contrasena}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$u->fecha_nacimiento}}">
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
            </div>
            <div class="modal-footer d-none">
            </div>
        </div>
    </div>
</div>