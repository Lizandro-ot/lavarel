<!--esta parte es la vista para la paguina donde estan todos los hotoles -->
@extends('plantillaPag.plantilla')

@section('title','hoteles')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <h1>Destino</h1>
        <div class="conte">
            <div class="album">
                <img src="{{ asset('img/cancun/cancun.jpg')}}" alt="">
                <button class="boton">
                   <li><a href="{{ route('cancun') }}">CANCUN</a></li> 
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img/puerto vallarta /puertovallarta.jpg')}}" alt="">
                <button class="boton">
                    <a href="{{ route('puerto') }}">PUERTO VALLARTA</a>

                    </button>
            </div>
            <div class="album">
                <img src="{{ asset('img/acapulco/acapulco.jpg')}}" alt="">
                <button class="boton">
                    <a href="{{ route('acapulco') }}">ACAPULCO</a>
                </button>
            </div>
            <div class="album">
                <img src="{{ asset('img/oaxaca/oaxaca.jpg')}}" alt="">
                <button class="boton">
                    <a href="{{ route('huatulco') }}">HUATULCO</a>
                    </button>
            </div>
            <div class="album">
                <img src="{{ asset('img/veracruz/veracruz.jpg')}}" alt="">
                <button class="boton">
                    <a href="{{ route('veracruz') }}">VERACRUZ</a>
                    </button>
            </div>
        </div>
@endsection
