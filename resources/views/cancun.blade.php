@extends('plantillaPag.plantilla')

@section('title','hoteles')

@section('contenido')

<body>
    <header>
        <div class="content">
            <div class="menu container">
                <a href="proyecto.html" class="logo">
                    <img src="logo.png" width="90px" height="70px" alt="">
                </a>
                  
                <nav class="navbar">
                    <ul>
                        <li><a href="proyecto.html">Inicio</a></li>
                        <li><a href="hoteles.html">Hoteles</a></li>
                        <li><a href="reservaciones.html">Reservaciones</a></li>
                        
                    </ul>
                </nav>
            </div>   
        </div>
        <h1>hoteles de Cancun</h1>
        <div class="hoteles">
            <div class="album">
                <img src="cancun\emporio cancun.jpg" >
                <button class="boton">
                   <a href="https://hotelesemporio.com/hoteles/emporio-cancun/">Hotel Emporio</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/Qw9FZL5TZj1WJLSp7">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="cancun\residence inn.jpg" >
                <button class="boton">
                   <a href="https://www.marriott.com/es/hotels/cunri-residence-inn-cancun-hotel-zone/overview/">Residence inn </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/oDeacuTfCsPyeQYE8">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src=" cancun\the westin resort.jpg" >
                <button class="boton">
                   <a href="https://www.guestreservations.com/es/the-westin-resort-spa-cancun-cancun/booking?utm_source=google&utm_medium=cpc&utm_campaign=21828508204&gad_source=1&gclid=Cj0KCQjwkZm_BhDrARIsAAEbX1FUR_w-AIDeDND9AKxtUjvsqsQPVF5oBKC1x4FD_oAAXdwDKLLjPt4aAq7LEALw_wcB&ctTriggered=true">The westin resort </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="cancun\selina.jpeg" >
                <button class="boton">
                   <a href="https://www.selina.mx/destinos/cancun-zh">Selina cancun </a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/zZPzVqWsKfjtKar9A">Mapa</a>
                </button>
            </div>
            <div class="album">
                <img src="cancun\hardrock.jpeg" >
                <button class="boton">
                   <a href="https://hotel.hardrock.com/cancun/es/">Hard Rock Hotel Cancun</a>
                </button>
                <button class="boton">
                    <a href="reservaciones.html">Reservar</a>
                </button>
                <button class="boton">
                    <a href="https://maps.app.goo.gl/ZsTmVbm9H1KMugmC8">Mapa</a>
                </button>
            </div>
        </div>
    </header>
    
</body>