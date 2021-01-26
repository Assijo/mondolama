<!-- Modal -->
<div class="modal fade" id="modificarProyecto{{ $p->id_proyecto }}" tabindex="-1" role="dialog" aria-labelledby="modificarProyectoLabel" aria-hidden="true">
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
                    <form class="formMagic-{{$p->id_proyecto}}" action="{{url('/modificarproyectos')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <input type="hidden" id="id" name="id" value="{{$p->id_proyecto}}" hidden>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$p->nombre}}">
                            </div>
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen"> 
                                    <label class="custom-file-label" for="imagen">Imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logotipo" name="logotipo"> 
                                    <label class="custom-file-label" for="logotipo">Logotipo</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="video" name="video">
                                    <label class="custom-file-label" for="video">Video</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="eslogan" name="eslogan" value="{{$p->eslogan}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{$p->ubicacion}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="number" class="form-control" id="precio" name="precio" value="{{$p->precio}}">
                            </div>
                            <div class="col">
                                <select class="form-control" id="id_tipo_proyecto" name="id_tipo_proyecto" id="exampleFormControlSelect1">
                                    @if($p->id_tipo_proyecto === 1)
                                    <option selected value="1">Hectárea</option>
                                    <option value="2">Casa</option>
                                    <option value="3">Fraccionamiento</option>
                                    @elseif($p->id_tipo_proyecto === 2)
                                    <option value="1">Hectárea</option>
                                    <option selected value="2">Casa</option>
                                    <option value="3">Fraccionamiento</option>
                                    @else
                                    <option value="1">Hectárea</option>
                                    <option value="2">Casa</option>
                                    <option selected value="3">Fraccionamiento</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                         <div class="col">
                            <input type="text" class="form-control" id="fase" name="fase" value="{{$p->fase}}">
                         </div>
                         <div class="col"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <textarea class="form-control sss-{{$p->id_proyecto}}"   name="descripcion">
                                    {!! ($p->descripcion) !!} 
                                </textarea>
                            </div>
                        </div>
                        <div class="row mt-3 mb-n3 text-center">
                            <div class="col">
                                <div class="form-group">
                                    <button data-miau="{{$p->id_proyecto}}" type="submit" class="btn btn-dark XD">Guardar</button>
                                </div>
                            </div>
                        </div>
                        <div>
                           <input class="MoreMagic-{{$p->id_proyecto}}" type="hidden" id="modDes" name="modDes" value="sss" hidden>
                        </div>
                    </form>
            </div>
          
          
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


