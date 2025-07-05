<!--esta parte es la vista para la pguina donde estan todos los hotoles -->
@extends('plantillaPag.plantilla')

@section('title','hoteles')

@section('contenido')

    <h1>Destino</h1>
        <div class="conte">
            <div class="album">
                <img src="cancun\cancun.jpg" >
                <button class="boton">
                   <a href="canc.html">Cancun</a>
                </button>
            </div>
            <div class="album">
                <img src="puerto vallarta\puertovallarta.jpg">
                <button class="boton">
                    <a href="puerto.html">Puerto vallarta</a>

                    </button>
            </div>
            <div class="album">
                <img src="acapulco\acapulco.jpg" >
                <button class="boton">
                    <a href="aca.html">Acapulco</a>
                </button>
            </div>
            <div class="album">
                <img src="oaxaca\huatulco.jpeg" >
                <button class="boton">
                    <a href="aoxa.html">Huatulco</a>
                    </button>
            </div>
            <div class="album">
                <img src="veracruz\veracruz.jpg" >
                <button class="boton">
                    <a href="vera.html">Veracruz</a>
                    </button>
            </div>
        </div>
@endsection
