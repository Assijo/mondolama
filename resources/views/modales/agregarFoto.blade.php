<!-- Modal -->
<div class="modal fade" id="agregarFoto{{$p->id_proyecto}}" tabindex="-1" role="dialog" aria-labelledby="agregarFotoLabel" aria-hidden="true">
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
				<form action="{{url('/administrarproyectos')}}" method="post" enctype="multipart/form-data">
				@csrf
					<div class="row">
					<div class="col-12">
							<div class="input-group mb-3">
								<div class="customed-file">
									<button type="button" class="btn btn-dark btn-file position-absolute">Seleccionar imágenes</button>
									<input type="file" class="btn btn-dark position-absolute file" id="foto[]" name="foto[]" aria-describedby="inputGroupFileAddon01" multiple  data-show-upload="false" data-show-caption="true">
									<label class="customed-file-label" for="inputGroupFile01"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="div-ejemplo">
					</div>
					<div class="row row-cols-3">
					@foreach($imagen as $imagen)
						<div class="col-4 mb-2">
							<button type="button" class="close-reverse position-relative" aria-label="Close">
								<span>&times;</span>
							</button>
							<img class="img-fluid" src="{{ asset('storage/'.$imagen->foto)}}">
						</div>
					@endforeach
					</div>
					<input type="hidden" id="id" name="id" value="{{$p->id_proyecto}}">
					<div class="row mt-3 mb-n3 text-center">
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark">Guardar</button>
                            </div>
                        </div>
                    </div>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>