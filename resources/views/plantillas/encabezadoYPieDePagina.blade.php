<!DOCTYPE hmtl>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('titulo')</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
        <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
        <!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
        <!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/my-styles.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="d-flex flex-column h-100">
        @yield('menu')
        @yield('contenido')
        
            <footer id="footer" class="footer bg-dark text-white py-3 mt-auto">
            <div class="container">
                <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-3 justify-content-around">
                    <div class="col col-md-4 justify-content-center mx-1 mx-md-0 my-2 my-md-3 text-center">
                        <span><a class="a" href="{{url('politicasprivacidad')}}">Políticas de privacidad</a></span>
                    </div>
                    <div class="col col-md-4 justify-content-center mx-1 mx-md-0 my-2 my-md-3 text-center">
                        <span><a class="a" href="{{url('terminoscondiciones')}}">Términos y condiciones</a></span>
                    </div>
                    <div class="col col-md-4 justify-content-center mx-1 mx-md-0 my-2 my-md-3 text-center">
                        <span><a class="a" href="{{url('acercade')}}">Acerca de nosotros</a></span>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <span>MONDOLAMA 2020 &#169;</span>
                </div>
            </div>
            </footer>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
            <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
                wish to resize images before upload. This must be loaded before fileinput.min.js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js" type="text/javascript"></script>
            <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
                This must be loaded before fileinput.min.js -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
            <!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js 
            3.3.x versions without popper.min.js. -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
                dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <!-- the main fileinput plugin file -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>
            <!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fas/theme.min.js"></script>
            <!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/locales/LANG.js"></script>
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/my-scripts.js') }}"></script>
    </body>
</html>