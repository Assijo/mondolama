@extends('plantillas/menuNavegacion')
@include('modales/agregarProyecto')
@section('contenido')
    <div class="container d-flex-block mt-5 align-self-center flex-shrink-0">


        <div class="row align-items-center">
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
                <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#agregarProyecto">Agregar proyecto</button>
            </div>
        </div>
        <div class="row my-5 align-items-center">
            <div class="col table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio total MXN</th>
                        <th scope="col">Precio por lote MXN</th>
                        <th scope="col">Fase</th>
                        <th scope="col">Ubicación</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyectos as $p)
                        <tr>
                            <td>{{$p->nombre}}</td>
                            <td>{{$p->precio}}</td>
                            <td>{{$p->precio_lote}}</td>
                            <td>{{$p->fase}}</td>
                            <td>{{$p->ubicacion}}</td>
                            @php
                                $imagen=$fotos[$p->id_proyecto];
                            @endphp
                            <td>
                                <div class="d-flex flex-row">
                                    <div class="d-flex mx-1">
                                        <a data-flag="0" class="magic" data-magic="{{$p->id_proyecto}}"  data-toggle="modal" data-target="#modificarProyecto{{ $p->id_proyecto }}">
                                            <svg width="14px"
                                            height="14px" viewBox="0 0 490.7 423.1" style="enable-background:new 0 0 490.7 423.1;">
                                            <path d="M469.3,423.1H192c-11.8,0-21.3-9.6-21.3-21.3s9.6-21.3,21.3-21.3h277.3c11.8,0,21.3,9.6,21.3,21.3S481.1,423.1,469.3,423.1z
                                            M411,42.3l-30.2-30.2C364.7-4,336.6-4,320.5,12.1l-44.1,44.1l90.5,90.5l44.1-44.1c8.1-8,12.5-18.8,12.5-30.2
                                            C423.5,61,419.1,50.3,411,42.3L411,42.3z M246.2,86.4L26.4,306.3c-1.4,1.4-2.4,3.2-2.8,5.1L0.3,410c-0.9,3.6,0.2,7.4,2.8,10
                                            c2,2,4.7,3.1,7.5,3.1c0.8,0,1.6-0.1,2.5-0.3l98.7-23.3c1.9-0.4,3.7-1.4,5.1-2.8l219.9-219.9L246.2,86.4z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a data-toggle="modal" data-target="#eliminarProyecto{{$p->id_proyecto}}">
                                            <svg width="14px"
                                                height="14px" viewBox="0 0 298.7 298.7" style="enable-background:new 0 0 298.7 298.7;" xml:space="preserve">
                                            <path class="st0" d="M298.7,30.2L268.5,0L149.3,119.1L30.2,0L0,30.2l119.1,119.1L0,268.5l30.2,30.2l119.1-119.1l119.1,119.1
                                                l30.2-30.2L179.5,149.3L298.7,30.2z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a href="{{url('/vistaproyecto',[$p->id_proyecto])}}">
                                            <svg width="14px" height="14px" viewBox="0 0 512 330">
                                            <path d="M509.2,156.3C504.6,149.9,395.7,0,257,0C118.3,0,7.4,149.9,2.8,156.3c-3.8,5.2-3.8,12.3,0,17.5C7.4,180.1,118.3,330,257,330
                                                c138.7,0,247.6-149.9,252.2-156.3C512.9,168.5,512.9,161.5,509.2,156.3z M257,270c-57.9,0-107-47.1-107-105S199.1,60,257,60
                                                s105,47.1,105,105S314.9,270,257,270z M257,120c-24.8,0-47,20.2-47,45c0,24.8,22.2,45,47,45c24.8,0,45-20.2,45-45
                                                C302,140.2,281.8,120,257,120z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a data-toggle="modal" data-target="#agregarFoto{{$p->id_proyecto}}">
                                            <svg width="14px" height="14px" viewBox="0 0 1065.7 760.5">
                                            <path id="SustracciÃ³n_25_1_" d="M757.7,760.5H114.2C51.1,760.5,0,709.4,0,646.4V318.4c0-63.1,51.1-114.2,114.2-114.2h151.2
                                                c15.4-43.5,56.6-72.6,102.8-72.5h112.2c46.2-0.1,87.4,29,102.8,72.5h96.4c9.5,102,90.6,182.6,192.6,191.6v250.5
                                                c0,63.1-51.1,114.2-114.2,114.2C757.9,760.5,757.8,760.5,757.7,760.5z M435.9,301c-100.2,2.9-179,86.5-176.1,186.7
                                                c2.8,96.1,80,173.4,176.1,176.1c100.2-2.9,179-86.5,176.1-186.7C609.3,381,532,303.8,435.9,301z M435.9,615.4
                                                c-73.5,2-134.8-56-136.7-129.6s56-134.8,129.6-136.7c73.5-2,134.8,56,136.7,129.6c0,1.2,0,2.5,0,3.7
                                                C566.4,554.9,508.4,614.4,435.9,615.4z M888.1,363.4c-99.3-1.3-178.7-82.8-177.6-182C708.4,83.2,786.3,2.1,884.4,0
                                                s179.3,75.8,181.3,173.9c0.1,2.5,0.1,4.9,0,7.4C1066.8,280.6,987.3,362,888.1,363.4z M783,156.5V206h88.9v91.2h48.4v-91.1h88.8
                                                v-49.5h-88.8V65.5h-48.4v91H783z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a data-toggle="modal" data-target="#eliminarFoto{{$p->id_proyecto}}">
                                            <svg width="20px" height="20px" viewBox="0 0 1065.7 760.5">
                                            <path id="Grupo_360_1_" transform="translate(-1651.999 -677)" class="st0" d="M2186.7,1214.1h-454.1c-44.5,0-80.6-36.1-80.6-80.6
                                                V902.1c0-44.5,36.1-80.6,80.6-80.6h106.7c10.9-30.7,39.9-51.3,72.5-51.2h79.2c32.6,0,61.7,20.5,72.5,51.2h68
                                                c6.7,71.9,63.9,128.8,135.9,135.1v176.9C2267.3,1178.1,2231.2,1214.1,2186.7,1214.1L2186.7,1214.1z M1959.6,889.8
                                                c-69.7,1-125.6,58.2-124.7,128c-0.8,69.8,55,127,124.7,128c69.7-1,125.6-58.2,124.7-128C2085.2,948.1,2029.4,890.8,1959.6,889.8z
                                                M1959.6,1111.7c-51.2-0.7-92.1-42.8-91.5-94c-0.7-51.2,40.3-93.3,91.5-94c51.2,0.7,92.1,42.8,91.5,94
                                                C2051.8,1068.9,2010.8,1111,1959.6,1111.7L1959.6,1111.7z M2278.6,933.9c-70-0.9-126.1-58.4-125.3-128.4
                                                c-0.8-70,55.3-127.5,125.3-128.5c70.1,0.9,126.1,58.4,125.3,128.5C2404.8,875.5,2348.7,933,2278.6,933.9L2278.6,933.9z
                                                M2204.6,787.9V823h159.5v-35.1L2204.6,787.9z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <!--@if($p->id_tipo_proyecto === 3)
                                    <div class="d-flex mx-1">
                                        <a href="{{  url('/administrarlotesmanzanas',[$p->id_proyecto])}}">
                                            <svg width="14px" height="14px" viewBox="0 0 181.2 157.7">
                                            <path id="UniÃ³n_15_1_" d="M87.2,157.7c-2.3,0-4.3-1.9-4.3-4.2V117c0-0.8-0.6-1.4-1.4-1.4H55.7c-0.8,0-1.4,0.6-1.4,1.4v36.5
                                                c0,2.3-1.9,4.2-4.3,4.2H25.7c-4.7,0-8.5-3.7-8.6-8.4V95.9h-10C3.3,96,0.1,92.9,0,89c0-1.9,0.7-3.8,2.1-5.2L65.6,24
                                                c0.8-0.7,1.8-1.2,2.9-1.2c1.1,0,2.2,0.4,3,1.2l27.8,26.2c4.6,15.4,17.1,27.1,32.7,30.8l2.9,2.8c1.4,1.3,2.2,3.1,2.2,5.1
                                                c0,3.9-3.2,7.1-7.2,7c0,0,0,0,0,0h-10v53.4c0,4.7-3.8,8.5-8.5,8.4H87.2z M104.6,37.8c0.3-21.2,17.7-38.1,38.9-37.8
                                                c20.7,0.3,37.5,17,37.8,37.8c-0.3,21.2-17.7,38.1-38.9,37.8C121.6,75.3,104.9,58.5,104.6,37.8z M120.2,42.9h19.2v18.8h10.5V42.9H169
                                                V32.7h-19.2V13.8h-10.5v18.8h-19.2L120.2,42.9z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="d-flex mx-1">
                                        <a href="{{  url('/apartarlotes',[$p->id_proyecto])}}">
                                            <svg width="14px" height="14px" viewBox="0 0 292.6 281.4">
                                            <path id="UniÃ³n_20_1_" d="M154.2,281.4c-4.2,0-7.6-3.4-7.6-7.6v-65.7c0-1.4-1.1-2.5-2.5-2.5H98.6c-1.4,0-2.5,1.1-2.5,2.5l0,0v65.7
                                                c0,4.2-3.4,7.6-7.6,7.6h-43c-8.4,0-15.1-6.8-15.2-15.2v-96.1H12.6c-6.9,0-12.5-5.6-12.6-12.6c0-3.4,1.4-6.6,3.7-9L116.1,41
                                                c2.9-2.8,7.6-2.8,10.5,0l10.5,10.1v46.1c0,2.3,1.9,4.2,4.2,4.2l0,0h48.5l49,47c2.4,2.4,3.8,5.7,3.8,9.1c0,6.9-5.6,12.5-12.6,12.6
                                                h-17.7v96.1c0,8.4-6.8,15.1-15.2,15.2L154.2,281.4z M229.3,123.8c-1.1-0.5-1.9-1.6-1.8-2.8V88.7h-73.9c-1.6,0-2.9-1.3-2.9-2.9V38.5
                                                c0-1.6,1.3-2.9,2.9-2.9h73.9V3c0-1.2,0.7-2.3,1.8-2.8c1.1-0.4,2.4-0.2,3.2,0.6l59.2,58.9c0.6,0.6,0.9,1.3,0.9,2.1
                                                c0,0.8-0.3,1.5-0.9,2.1l-59.1,59.1c-0.6,0.6-1.3,0.9-2.1,0.9C230.1,124,229.7,123.9,229.3,123.8z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    @else
                                    <div class="custom-control custom-switch ml-2 mt-n1">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                    @endif-->
                                </div>
                            </td>
                        </tr>
                        @include('modales/modificarProyecto')
                        @include('modales/agregarFoto')
                        @include('modales/eliminarFoto')
                        @include('modales/eliminarProyecto')
                        @endforeach

                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
<script>
    window.onload = function() {
    
        $(".magic").click(function() {
        var sss=    $(this).data("magic");


        var magic='.sss-'+sss;  


   
console.log($(this).data('flag'));
if( $(this).data('flag')=='0'){


        $(magic).richText({
      // text formatting
      bold: true,
      italic: true,
      underline: true,

      // text alignment
      leftAlign: true,
      centerAlign: true,
      rightAlign: true,
      justify: true,

      // lists
      ol: false,
      ul: false,

      // title
      heading: true,

      // fonts
      fonts: false,

      fontColor: false,
      fontSize: false,

      // uploads
      imageUpload: false,

      fileUpload: false,


      // media
      videoEmbed: false,
      // link
      urls: false,

      // tables
      table: false,

      // code
      removeStyles: false,
      code: false,

      translations: {
          'title': 'Titulo',
          'white': 'Blanco',
          'black': 'Negro',
          'brown': 'Café',
          'beige': 'Beige',
          'darkBlue': 'Azul Oscuro',
          'blue': 'Blue',
          'lightBlue': 'Light Blue',
          'darkRed': 'Dark Red',
          'red': 'Rojo',
          'darkGreen': 'Dark Green',
          'green': 'Green',
          'purple': 'Purple',
          'darkTurquois': 'Dark Turquois',
          'turquois': 'Turquois',
          'darkOrange': 'Dark Orange',
          'orange': 'Orange',
          'yellow': 'Yellow',
          'imageURL': 'Image URL',
          'fileURL': 'File URL',
          'linkText': 'Link text',
          'url': 'URL',
          'size': 'Size',
          'responsive': 'Responsive',
          'text': 'Texto',
          'openIn': 'Open in',
          'sameTab': 'Same tab',
          'newTab': 'New tab',
          'align': 'Alinear',
          'left': 'Izquierda',
          'justify': 'Justificar',
          'center': 'Centro',
          'right': 'Derecho',
          'rows': 'Rows',
          'columns': 'Columns',
          'add': 'Add',
          'pleaseEnterURL': 'Please enter an URL',
          'videoURLnotSupported': 'Video URL not supported',
          'pleaseSelectImage': 'Please select an image',
          'pleaseSelectFile': 'Please select a file',
          'bold': 'Negritas',
          'italic': 'Itálica',
          'underline': 'Subrayado',
          'alignLeft': 'Alinear Izquierda',
          'alignCenter': 'Alinear Centro',
          'alignRight': 'Alinear Derecha',
          'addOrderedList': 'Add ordered list',
          'addUnorderedList': 'Add unordered list',
          'addHeading': 'Agrgar Encabezado/Titulo',
          'addFont': 'Add font',
          'addFontColor': 'Add font color',
          'addFontSize': 'Add font size',
          'addImage': 'Add image',
          'addVideo': 'Add video',
          'addFile': 'Add file',
          'addURL': 'Add URL',
          'addTable': 'Add table',
          'removeStyles': 'Remove styles',
          'code': 'Show HTML code',
          'undo': 'Undo',
          'redo': 'Redo',
          'close': 'Close'
      },


  });
}
   

  var seguimos =  $(magic).val();
  
  var magic2='.MoreMagic-'+sss;  
  $(magic2).val(seguimos);

  $(this).data('flag','1');





 

});
$('.XD').click(function(e) {
    e.preventDefault();
    
  var id=$(this).data("miau");
  var magic='.sss-'+id;  
  var seguimos =  $(magic).val();
  var magic3='.MoreMagic-'+id;  
  $(magic3).val(seguimos);


  var yanise=".formMagic-"+id;
  $(yanise).submit();
   
});




        $('.sss2').richText({
            // text formatting
            bold: true,
            italic: true,
            underline: true,
    
            // text alignment
            leftAlign: true,
            centerAlign: true,
            rightAlign: true,
            justify: true,
    
            // lists
            ol: false,
            ul: false,
    
            // title
            heading: true,
    
            // fonts
            fonts: false,
    
            fontColor: false,
            fontSize: false,
    
            // uploads
            imageUpload: false,
    
            fileUpload: false,
    
    
            // media
            videoEmbed: false,
            // link
            urls: false,
    
            // tables
            table: false,
    
            // code
            removeStyles: false,
            code: false,
    
            translations: {
                'title': 'Titulo',
                'white': 'Blanco',
                'black': 'Negro',
                'brown': 'Café',
                'beige': 'Beige',
                'darkBlue': 'Azul Oscuro',
                'blue': 'Blue',
                'lightBlue': 'Light Blue',
                'darkRed': 'Dark Red',
                'red': 'Rojo',
                'darkGreen': 'Dark Green',
                'green': 'Green',
                'purple': 'Purple',
                'darkTurquois': 'Dark Turquois',
                'turquois': 'Turquois',
                'darkOrange': 'Dark Orange',
                'orange': 'Orange',
                'yellow': 'Yellow',
                'imageURL': 'Image URL',
                'fileURL': 'File URL',
                'linkText': 'Link text',
                'url': 'URL',
                'size': 'Size',
                'responsive': 'Responsive',
                'text': 'Texto',
                'openIn': 'Open in',
                'sameTab': 'Same tab',
                'newTab': 'New tab',
                'align': 'Alinear',
                'left': 'Izquierda',
                'justify': 'Justificar',
                'center': 'Centro',
                'right': 'Derecho',
                'rows': 'Rows',
                'columns': 'Columns',
                'add': 'Add',
                'pleaseEnterURL': 'Please enter an URL',
                'videoURLnotSupported': 'Video URL not supported',
                'pleaseSelectImage': 'Please select an image',
                'pleaseSelectFile': 'Please select a file',
                'bold': 'Negritas',
                'italic': 'Itálica',
                'underline': 'Subrayado',
                'alignLeft': 'Alinear Izquierda',
                'alignCenter': 'Alinear Centro',
                'alignRight': 'Alinear Derecha',
                'addOrderedList': 'Add ordered list',
                'addUnorderedList': 'Add unordered list',
                'addHeading': 'Agrgar Encabezado/Titulo',
                'addFont': 'Add font',
                'addFontColor': 'Add font color',
                'addFontSize': 'Add font size',
                'addImage': 'Add image',
                'addVideo': 'Add video',
                'addFile': 'Add file',
                'addURL': 'Add URL',
                'addTable': 'Add table',
                'removeStyles': 'Remove styles',
                'code': 'Show HTML code',
                'undo': 'Undo',
                'redo': 'Redo',
                'close': 'Close'
            },
        });
 
    

      

    }



    
    </script>

@endsection
