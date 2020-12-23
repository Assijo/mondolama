<!-- Modal -->
<div class="modal fade" id="eliminarFoto{{$p->id_proyecto}}" tabindex="-1" role="dialog" aria-labelledby="eliminarFotoLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header row">
				<div class="col-3"></div>
				<h5 class="modal-title col-6 text-center" id="eliminarFotoLabel">Eliminar fotografía</h5>
				<div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<form action="{{url('/administrarproyectos')}}" method="post" enctype="multipart/form-data">
				@csrf
				@php
					$i = 0
				@endphp
					<div class="row row-cols-3">
					@foreach($imagen as $imagen)
						<div class="col-4 mb-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="foto{{$i}}" name="foto" value="{{ old('foto', isset($imagen->id_fotografia) ? 'checked' : '') }}">
							<label class="custom-control-label" for="foto{{$i}}"></label>
                        </div>
							<img class="img-fluid" src="{{ asset('storage/'.$imagen->foto)}}">
						</div>
						@php
							$i++;
						@endphp
					@endforeach
					</div>
					<div class="row mt-3 mb-n3 text-center">
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark" value="Submit">Enviar</button>
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