<!-- Modal -->
<div class="modal fade" id="eliminarProyecto{{$p->id_proyecto}}" tabindex="-1" role="dialog" aria-labelledby="eliminarProyectoLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header row">
				<div class="col-3"></div>
				<h5 class="modal-title col-6 text-center" id="eliminarProyectoLabel">Eliminar proyecto</h5>
				<div class="col-3">
					<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			<div class="modal-body">
				<form action="{{url('/eliminarproyecto')}}" method="post" enctype="multipart/form-data">
				@csrf
					<div class="row">
						<div class="col text-center">
                            <p>¿Esta seguuro de que desea eliminar este proyecto?</p>
                            <input type="hidden" name="idproyecto" value="{{$p->id_proyecto}}">
					    </div>
					</div>
	
					<div class="form-group form-inline">
						<div class="row mt-3 mb-n3">
							<div class="col ml-auto">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							</div>
							<div class="col">
								<button type="submit" class="btn btn-dark" name="id" value="{{$p->id_proyecto}}">Eliminar</button>
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