<!--se crea la vista de la paguina de incio-->
@extends('plantillaPag.plantilla')

@section('title','inicio')

@section('contenido')
    <link rel="stylesheet" href="{{ asset('proyecto.css')}}">
    <link rel="stylesheet" href="{{ asset('menu.css')}}">
    <link rel="stylesheet" href="{{ asset('styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <section class="carousel">
        <div class="carousel-container">
          <div class="carousel-slide">
            <img src="{{ asset('img\fotos\hotel 2.webp')}}" alt="Hotel de lujo en la playa">
          </div>
          <div class="carousel-slide">
            <img src="fotos\hoteles-en-puebla-azultalavera.webp" alt="Hotel urbano moderno">
          </div>
          <div class="carousel-slide">
            <img src="fotos\hotel 3.jpg" alt="Resort en la montaña">
          </div>
        </div>
        <button class="prev-btn" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next-btn" onclick="moveSlide(1)">&#10095;</button>
      </section>
    
      <section class="about">
        <div class="container">
          <h2>Bienvenido a nuestra Agencia de Hoteles</h2>
          <p>Ofrecemos una selección exclusiva de hoteles en destinos de ensueño. Nuestro objetivo es ayudarte a encontrar el alojamiento ideal que se adapte a tus necesidades y presupuesto.</p>
          <img src="{{ asset('img\fotos\wbmexico0715-four-seasons-punta-mita-e1478672924342.webp')}}" alt="Oficina de la agencia">
        </div>
      </section>
    
      <section class="services">
        <div class="container">
          <h2>Nuestros Servicios</h2>
          <div class="service-item">
            <img src="{{ asset('img\fotos\hoteles-puerto-vallarta.webp')}}" alt="Reservaciones">
            <h3>Reservaciones Personalizadas</h3>
            <p>Te asistimos en la reserva del hotel que mejor se adapte a tus preferencias.</p>
          </div>
          <div class="service-item">
            <img src="{{ asset('img\fotos\unnamed.jpg')}}" alt="Atención al cliente">
            <h3>Atención 24/7</h3>
            <p>Nuestro equipo está disponible las 24 horas para ayudarte en lo que necesites.</p>
          </div>
          <div class="service-item">
            <img src="{{ asset('img\fotos\hotel 1.jpeg')}}" alt="Ofertas especiales">
            <h3>Ofertas Exclusivas</h3>
            <p>Accede a promociones y descuentos especiales en una variedad de hoteles.</p>
          </div>
        </div>
      </section>
    
      <script src="script.js"> 
        let currentIndex = 0;
    
    function moveSlide(step) {
      const slides = document.querySelectorAll('.carousel-slide');
      const totalSlides = slides.length;
      currentIndex = (currentIndex + step + totalSlides) % totalSlides;
      updateCarousel();
    }
    
    function updateCarousel() {
      const carouselContainer = document.querySelector('.carousel-container');
      const slideWidth = document.querySelector('.carousel-slide').clientWidth;
      carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
    
    
    setInterval(() => moveSlide(1), 5000);
    
      </script>
@endsection