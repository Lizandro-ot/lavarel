@extends('plantillaPag.plantilla')

@section('title','puerto')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <header>
        <h1>hoteles de Puerto Vallarta</h1>
        <div class="hoteles">
            <div class="album">
                <img src="{{ asset('img\puerto vallarta\dreams vallarta.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.hyattinclusivecollection.com/es/resorts-y-hoteles/dreams/mexico/vallarta-bay-resort-spa/?gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-33qhMPQv5lb7ely1lYmFG2gy4MSriuc0pYK3ktodI6FFCvbDzWDn9RoCX0YQAvD_BwE">Dream vallarta</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/BYCtMgFWEZ86GPet5">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\puerto vallarta\krystal.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://es.krystalgrand-nuevovallarta.com/?partner=1996&cp=SPRING10&gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-37Y3Cn5O-L-J7_FVLZVBBlhCPtHriGRPl02LQmmWy6F-_fFfsIQwMhoCv_8QAvD_BwE">Krystal Vallarta </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/hrybMjE9Hq9MAB8G6">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\puerto vallarta\villartasol.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://www.vallartasol.com.mx/?gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-3_jWrRbiDymQEx7JeZJ7lSGHJSuyK6nM89fWOpuYXXhPzBb9SbKzjRoCLzQQAvD_BwE">Vallartasol Hotel </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/oYct5t5PGi5yAVwx7">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\puerto vallarta\tropicana.avif')}}" alt="">
                <button class="boton">
                   <a href="https://www.tropicanavallarta.com/">Hotel tropicana </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/K3VQ9HPh7a7gsmEx7">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img\puerto vallarta\crown.jpeg')}}" alt="">
                <button class="boton">
                   <a href="https://pvg.crownparadise.com.mx/?utm_source=google_search&utm_medium=cpc&utm_campaign=amadeus_brand&gad_source=1&gclid=CjwKCAjwwLO_BhB2EiwAx2e-3zb8_BCdMsSkcaxFWbC1hQRxw6B7HUoPO4NL9_qjgMbwm90_T35CRxoCHqYQAvD_BwE&gclsrc=aw.ds">Crown Paradise Golden</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/n7u3wQ3jh6XM2EMC7">Mapa</a>
                </button>
            </div>
        </div>
    </header>
</body>
@endsection