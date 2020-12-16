<!-- Modal -->
<div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="agregarUsuarioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="agregarUsuarioLabel">Agregar usuario</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer d-none">
            </div>
        </div>
    </div>
</div>