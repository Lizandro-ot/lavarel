<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ 
    return view('incio');
});

Route::get('/hoteles', function(){ 
    return view('hoteles');
});

Route::get('/hotelesiii', function(){ 
    return '<div class="carousel-container">
          <div class="carousel-slide">
            <img src="fotos\hotel 2.webp" alt="Hotel de lujo en la playa">
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
      </section>';
});

?>


