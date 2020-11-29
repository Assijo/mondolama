<!-- Modal -->
<div class="modal fade" id="modificarProyecto" tabindex="-1" role="dialog" aria-labelledby="modificarProyectoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="modificarProyectoLabel">Modificar proyecto</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio del lote">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Logotipo</label>
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fase">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Eslogan">
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Video</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio total">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ubicación">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <textarea class="form-control" placeholder="Descripción"></textarea>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-dark">Guardar</button>
            </div>
        </div>
    </div>
</div>