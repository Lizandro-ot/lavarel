@extends('plantillaPag.plantilla')

@section('title','puerto')

@section('contenido')

    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <header>
        <h1>hoteles</h1>
        <div class="hoteles">
            <div class="album">
                <img src="{{ asset('img\veracruz\emporio.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://hotelesemporio.com/promociones/especial-semana-santa/?partner=10159&gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-3wel68UW7AQ_xfHJxlBU86faCUt9TTUbfmyq9OTlU-OIcAlRWeTPtBoCOXAQAvD_BwE">Hotel Emporio </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/m8KP1qZQzMDtsrkQ9">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\veracruz\dali.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.hotelvillasdali.com/">Hotel villas dali</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/cAzu5ktu9Pym6bvv6">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\veracruz\collection.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://mocambo.veracruz-hotels.com/es/">Collection O Hotel Mocambo</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/dor5Gj7J88yzAC4N9">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\veracruz\boutique.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://hotelboutiquebocaveracruz.com/">Hotel Boutique Boca </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/Z6jfHJK3DHyL8Gay7">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\veracruz\double.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.hilton.com/es/locations/mexico/veracruz/doubletree-by-hilton/?WT.mc_id=zlada0ww1dt2psh3ggl4advbpp5dkt6multibr7_342570527_1003528&gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-32DpQ15fJ09xwIuv7RTl0E_GOxa6nuVfQj2HYYI-4CMUNQRSBSjRDRoCMMoQAvD_BwE&gclsrc=aw.ds">DoubleTree by Hilton</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/UoWEeu36UVaRoFyTA">Mapa</a>
                </button>
            </div>
        </div>
    </header>
</body>
@endsection