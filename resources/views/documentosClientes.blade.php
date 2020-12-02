@extends('plantillas/menuNavegacion')
@section('contenido')

<div class="container d-flex-block mt-5 align-self-center flex-shrink-0">
    <div class="row align-items-center mb-5">
        <div class="col">
            <form class="form-inline">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit">
                    <svg viewBox="0 0 500 500" width="14px"
                    height="24px">
                        <path fill="white" d="M356.5,303.3c20.9-31,33.1-68.4,33.1-108.5C389.6,87.4,302.2,0,194.8,0S0,87.4,0,194.8s87.4,194.8,194.8,194.8
                        c40.9,0,78.9-12.7,110.3-34.3l155.2,154.6l51.7-51.7L356.5,303.3z M194.8,334.9C117.7,334.9,55,272.2,55,195.1
                        C55,118,117.7,55.3,194.8,55.3S334.6,118,334.6,195.1S271.9,334.9,194.8,334.9z"/>
                    </svg>
                </button>
            </form>
        </div>
        <div class="col d-flex align-items-start">
            <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#agregarProyecto">Agregar documentos</button>
        </div>
    </div>
    <div class="row my-5 align-items-center">
        <div class="col table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto del INE</th>
                        <th scope="col">Foto del comprobante de domicilio</th>
                        <th scope="col">Foto del cliente</th>
                        <th scope="col">Foto del contrato</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Francisco Aarón Ponce FLores</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>
                            <a href="#"  data-toggle="modal" data-target="#modificarProyecto">
                                <svg width="14px"
                                height="14px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Juan Francisco Aarón Ponce FLores</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>
                            <a href="#"  data-toggle="modal" data-target="#modificarProyecto">
                                <svg width="14px"
                                height="14px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Juan Francisco Aarón Ponce FLores</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>FFENVR34FS.pdf</td>
                        <td>
                            <a href="#"  data-toggle="modal" data-target="#modificarProyecto">
                                <svg width="14px"
                                height="14px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection