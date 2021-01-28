<!-- Modal -->
<div class="modal fade" id="agregarImagen" tabindex="-1" role="dialog" aria-labelledby="agregarImagenLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header row">
                <div class="col-3"></div>
                <h5 class="modal-title col-6 text-center" id="agregarImagenLabel">Agregar banner</h5>
                <div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            </div>
            <div class="modal-body">
                <form action="{{url('/agregarImagen')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen" required>
                                    <label class="custom-file-label" for="imagen">Banner</label>
                                </div>
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

