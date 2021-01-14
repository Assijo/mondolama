@extends('plantillas/menuNavegacion')
@include('modales/cargarDocumentos')
@include('modales/cambiarDocumento')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
        <div class="row align-items-center">
            <div class="col-md-8"></div>
            <div class="col-6 col-md-2 d-flex align-items-start">
                <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#cargarDocumentos">Cargar documentos</button>
            </div>
            <div class="col-6 col-md-2 d-flex align-items-start">
                <button type="button" class="btn btn-dark ml-auto">Enviar por correo</button>
            </div>
        </div>
        <div class="row my-5 align-items-center">
            <div class="col-3"></div>
            <div class="col-sm-6 table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Archivo</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">INE</td>
                            <td>FFENVR34FS.pdf</td>
                            <td>
                                <div class="d-flex ml-n2 mr-1">
                                    <a href="#" data-toggle="modal" data-target="#cambiarDocumento">
                                        <svg width="12px" height="12px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                        <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                        M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                        C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                        c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Comprobante de domicilio</td>
                            <td>FFENVR34FS.pdf</td>
                            <td>
                                <div class="d-flex ml-n2 mr-1">
                                    <a href="#" data-toggle="modal" data-target="#cambiarDocumento">
                                        <svg width="12px" height="12px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                        <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                        M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                        C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                        c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Foto del cliente</td>
                            <td>FFENVR34FS.pdf</td>
                            <td>
                                <div class="d-flex ml-n2 mr-1">
                                    <a href="#" data-toggle="modal" data-target="#cambiarDocumento">
                                        <svg width="12px" height="12px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                        <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                        M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                        C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                        c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">Contrato</td>
                            <td>FFENVR34FS.pdf</td>
                            <td>
                                <div class="d-flex ml-n2 mr-1">
                                    <a href="#" data-toggle="modal" data-target="#cambiarDocumento">
                                        <svg width="12px" height="12px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                        <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                        M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                        C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                        c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection