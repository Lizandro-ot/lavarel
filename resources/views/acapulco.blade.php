@extends('plantillaPag.plantilla')

@section('title','puerto')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
        <h1>hoteles de Acapulco</h1>
        <div class="hoteles">
            <div class="album">
                <img src="{{ asset('img\acapulco\suite.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.playasuites.com.mx/?gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-38fycNpw8brXmUpQhBqvXhU-DNsXq76EyveRnFuaDpEi35GeRMITkRoCnRcQAvD_BwE"> Playa Suites</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/9hw4hn2AXz2GuhYd8">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\acapulco\alba.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.albasuites.com.mx/">Alba Suites  </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/EpapcXHq6dwukCF86">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\acapulco\princes.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.mundoimperial.com/princess">Princess Mundo Imperial </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/jZcX7DFsa1cft4Si9">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\acapulco\alcamar.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.acamaracapulco.com/">Acamar Beach Resort</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/rwjBG1GaJR621s3t8">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\acapulco\torres.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://lastorresgemelas.com/es?currency=MXN"> Las Torres Gemelas</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/za42eVi23sBZsgjp9">Mapa</a>
                </button>
            </div>
        </div>
    </header>
</body>
@endsection