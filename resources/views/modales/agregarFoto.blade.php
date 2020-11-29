<!-- Modal -->
<div class="modal fade" id="agregarFoto" tabindex="-1" role="dialog" aria-labelledby="agregarFotoLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header row">
				<div class="col-3"></div>
				<h5 class="modal-title col-6 text-center" id="agregarFotoLabel">Agregar fotografía</h5>
				<div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="input-group mb-3">
							<div class="customed-file">
								<button type="button" class="btn btn-dark btn-file position-absolute">Seleccionar imágenes</button>
								<input type="file" class="btn btn-dark position-absolute" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" multiple>
								<label class="customed-file-label" for="inputGroupFile01"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="div-ejemplo">
				</div>
				<div class="row row-cols-3">
					<div class="col-4">
						<button type="button" class="close-reverse position-relative" aria-label="Close">
							<span>&times;</span>
						</button>
						<img src="images/casas.jpg" class="img-fluid mt-n2" alt="Responsive image">
					</div>
					<div class="col-4">
						<button type="button" class="close-reverse position-relative" aria-label="Close">
							<span>&times;</span>
						</button>
						<img src="images/casas.jpg" class="img-fluid mt-n2" alt="Responsive image">
					</div>
					<div class="col-4">
						<button type="button" class="close-reverse position-relative" aria-label="Close">
							<span>&times;</span>
						</button>
						<img src="images/casas.jpg" class="img-fluid mt-n2" alt="Responsive image">
					</div>
				</div>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button type="button" class="btn btn-dark">Guardar</button>
			</div>
		</div>
	</div>
</div>