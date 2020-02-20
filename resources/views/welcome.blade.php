<?php
$cor_p = '304ffe indigo accent-4';
?>
<!DOCTYPE html>

<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        @include('scripts.css')
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div id="app">
            <header>
                @include('partes.nav')

            </header>
            <main class="">
    <!--            <img id="fundo" src="{{url('/imagem/arquivo/noturna.jpg') }}" alt="">-->
                <div class="parallax-container">
                    <div class="">
                        <h1 class="center-align white-text">Portal</h1>
                    </div>
                    <div class="parallax"><img src="{{url('/imagem/arquivo/noturna.jpg')}}"></div>
                </div>
                <div class="section white">
                    <div class="row container">
                        @yield('content')
                    </div>
                    <teste-component></teste-component>
                </div>




            </main>
            <footer class="page-footer {{$cor_p}}">

                @include('partes.footer')
            </footer>
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script src="{{mix('/js/app.js')}}"></script>
        @include('scripts.js')
        </body>
</html>