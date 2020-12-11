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
                <form >
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Fase" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLogotipo" required>
                                    <label class="custom-file-label" for="customFile">Logotipo</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" required>
                                    <label class="custom-file-label" for="customFile">Video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Eslogan" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ubicación" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="number" min="1" step="any" class="form-control" placeholder="Precio total/Precio del lote" required>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option selected>Hectárea</option>
                                <option>Casa</option>
                                <option>Fraccionamiento</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Descripción" required></textarea>
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