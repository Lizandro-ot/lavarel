<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

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