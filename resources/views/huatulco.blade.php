@extends('plantillaPag.plantilla')

@section('title','puerto')

@section('contenido')

    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <header>
        <h1>hoteles de Huatulco</h1>
        <div class="hoteles">
            <div class="album">
                <img src="{{ asset('img\oaxaca\quinta.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.quintabellahuatulco.com/">Quinta Bella</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/ZgNoQ5zD4s9EBW6t6">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\oaxaca\holiday.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.guestreservations.com/holiday-inn-huatulco/booking?utm_source=google&utm_medium=cpc&utm_campaign=991006024&gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-37HYgfLZDjYe70hb-780cII868tdKEl3WoQOQrdLuSvLY4ocghLGNRoCI3sQAvD_BwE">Holiday Inn Huatulco</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/SL4ifBAWM6rB6RbR7">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\oaxaca\mariana.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.hotelmarinahuatulco.com/?gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-35ELKpfaEXzwkvvm1ydxH7W1JwxMKaeVBhP5VPjwsRm1_XPP4J1pFxoCKKwQAvD_BwE&gclsrc=aw.ds">marina hotel & resort</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/2z3czLQxyJKNVhsQA">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\oaxaca\santa.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.hotelsantacruzhuatulco.com/">Hotel Santa Cruz</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/XDAGvLZUzaEciWXG6">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\oaxaca\hotel.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://hotelhuatulcomaxico.com/">Hotel Huatulco</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/xt1yenvKAGPFrCNQ9">Mapa</a>
                </button>
            </div>
        </div>
    </header>
</body>
@endsection