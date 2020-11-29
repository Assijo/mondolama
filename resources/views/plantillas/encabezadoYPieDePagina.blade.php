<!DOCTYPE hmtl>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('titulo')</title>

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
                        <span>Políticas de privacidad</span>
                    </div>
                    <div class="col col-md-4 justify-content-center mx-1 mx-md-0 my-2 my-md-3 text-center">
                        <span>Términos y condiciones</span>
                    </div>
                    <div class="col col-md-4 justify-content-center mx-1 mx-md-0 my-2 my-md-3 text-center">
                        <span>Acerca de nosotros</span>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <span>MONDOLAMA 2020 &#169;</span>
                </div>
            </div>
            </footer>
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/my-scripts.js') }}"></script>
    </body>
</html>