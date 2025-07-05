<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hoteles')</title>
</head>
<body>
    <!--se creo un menu, donde se quedara estatico es una plantilla-->
    <header>
        <div class="content">
            <div class="menu container">
                <a href="proyecto.html" class="logo">
                    <img src="logo.png" width="90px" height="70px" alt="">
                </a>
                  
                <nav class="navbar">
                    <ul>
                        <li><a href="{{url('/hotelesiii')}}">Inicio</a></li>
                        <li><a href="hoteles.html">Hoteles</a></li>
                        <li><a href="reservaciones.html">Reservaciones </a></li>  
                        
                    </ul>
                </nav>
            </div>   
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
  <div class="iconos">
      <div class="iconos2" ><a href="https://www.facebook.com/UniverMileniumU/?locale=es_LA"><i class="fa-brands fa-facebook" ></i></a></div>
      <div class="iconos2"><a href="https://x.com/univermilenium1?lang=es"><i class="fa-brands fa-x-twitter"></i></a></div>
      <div class="iconos2"><a href="https://www.instagram.com/univermilenium_oficial/?hl=es"><i class="fa-brands fa-instagram"></i></a></div>
  </div>
  <br><br>
      <div class="iconos2"><a href="proyecto.html">Inicio</a></div>
      <div class="iconos2"><a href="hoteles.html">Hoteles</a></div>
      <div class="iconos2"><a href="reservaciones.html">Reservaciones</a></div>
      <div class="iconos2"><a href="registro.html">Registrarse</a></div>
      
      <h4>© 2025 UniverMilenium | April |Lizandro Ocampo Trinidad</h4>
</footer>
</body>
</html>