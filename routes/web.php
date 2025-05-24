<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\indexcontroller;
use App\http\Controllers\productoscontroller;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', indexcontroller::class);

//--------declaracionde  rutas fijas--------//
Route::get('/productos',[productoscontroller::class, "index"]);

//--------declaracion de parametros fijos-----///
Route::get('productos/crear',[productoscontroller::class, "create"]);

Route::get('productos/{product}',[productoscontroller::class, "show"]);


//--------- declaracion de tutas fijas------//
Route::get('productos',function(){
    return "Seccion de productos";
});

//-------declaracion de parametros--------//
Route::get('productos/{id}',function ($id){
    return  "Bienvenidos $id";
});

Route::get('prueba_parametros/{id}', function ($id) {
    $d = $id;
    $nombre = explode("-",$d);
    return "tu nombre es $nombre[1]";
});