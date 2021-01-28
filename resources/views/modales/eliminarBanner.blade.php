<!-- Modal -->
<div class="modal fade" id="eliminarBanner{{ $c->id_carousel }}" tabindex="-1" role="dialog" aria-labelledby="eliminarBannerLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header row">
				<div class="col-3"></div>
				<h5 class="modal-title col-6 text-center" id="eliminarBannerLabel">Eliminar banner</h5>
				<div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<form action="{{url('/eliminarBanner')}}" method="post" enctype="multipart/form-data">
				@csrf
					<div class="row">
						<div class="col text-center">
                            <p>¿Esta seguuro de que desea eliminar este banner?</p>
                            <input type="hidden" id="idbanner" name="idbanner" value="{{ $c->id_carousel }}">
					    </div>
					</div>
	
					<div class="form-group form-inline">
						<div class="row mt-3 mb-n3">
							<div class="col ml-auto">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-dark">Eliminar</button>
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