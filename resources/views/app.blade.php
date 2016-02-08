<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Protocolos de Tesis - FCC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link rel="stylesheet" type="text/css" href="/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    </head>
    <body>
        <!--[if lt IE 7]>
           <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div class="logo">
                <img src="/images/negativo.png" alt="BUAP">
            </div>
            <div class="middle">
                <h1 class="titulo">Sistema Web para la licitación de Aplicaciones Colaborativas</h1>
                <a href="#" class="subtitulo">Facultad de Computación</a>
            </div>
            <div class="right">
                <img src="/images/fcc.png" alt="FCC">
            </div>
        </header>

        <nav>
            <ul class="menu">               
                <li><a href="/tareas">Tareas</a></li>
                <li><a href="/fases">Fases</a></li>
                <li><a href="/roles">Roles</a></li>
                <li><a href="/fases/interaccion_vistas">Interacción y Vistas</a></li>
            </ul>
        </nav>

        <section class="secciones">
            @yield('content')
        </section>
    
        <footer>
            <h3>
                Eric García Pérez & Mario Pacheco Ramirez <br>
                Mario Anzures García
                <span class="fcc">FCC</span>
            </h3>
        </footer>
        
        <!-- Vendors -->
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>

        <!-- Main -->
        <script src="/js/main.js"></script>
    </body>
</html>