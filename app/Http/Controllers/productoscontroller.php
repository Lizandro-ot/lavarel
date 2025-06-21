<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productoscontroller extends Controller
{
    public function index(){
        return view("productos.index");
    }

    public function create(){
        return "carrito activo";
    }

     public function show($prod){
        return view("productos.show", compact("prod"));
    } 
}
