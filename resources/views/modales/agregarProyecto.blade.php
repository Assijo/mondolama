<!-- Modal -->
<div class="modal fade" id="agregarProyecto" tabindex="-1" role="dialog" aria-labelledby="agregarProyectoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="agregarProyectoLabel">Agregar proyecto</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
                <form action="{{url('/administrarproyectos')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen" id="customFileLogotipo" required>
                                    <label class="custom-file-label" for="customFile">Imagen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logotipo" name="logotipo" id="customFileLogotipo" required>
                                    <label class="custom-file-label" for="customFile">Logotipo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="video" name="video" required>
                                    <label class="custom-file-label" for="customFile">Video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="eslogan" name="eslogan" placeholder="Eslogan" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="number" min="1" step="any" class="form-control" id="precio" name="precio" placeholder="Precio total/Precio del lote" required>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" id="id_tipo_proyecto" name="id_tipo_proyecto">
                                <option selected value="1">Hectárea</option>
                                <option value="2">Casa</option>
                                <option value="3">Fraccionamiento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" id="fase" name="fase" placeholder="Fase" required>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                               
                                    <textarea class="form-control sss2" id="estaCosa" name="descripcion" placeholder="Descripción" required>
                                      
                                    </textarea>
                                
                    
                            </div>
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

