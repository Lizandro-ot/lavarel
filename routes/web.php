<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

Route::get('/hoteles', function(){ 
    return view('hoteles');
})->name('hoteles');

Route::get('/inicio', function(){ 
    return view('inicio');
})->name('inicio');;

Route::get('/cancun', function(){ 
    return view('cancun');
})->name('cancun');

Route::get('/puerto', function(){ 
    return view('puerto');
})->name('puerto');

Route::get('/acapulco', function(){ 
    return view('acapulco');
})->name('acapulco');

Route::get('/huatulco', function(){ 
    return view('huatulco');
})->name('huatulco');

Route::get('/veracruz', function(){ 
    return view('veracruz');
})->name('veracruz');


Route::get('/registro', [RegistroController::class, 'create']);
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');


?>


