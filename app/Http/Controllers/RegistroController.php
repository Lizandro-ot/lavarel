<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        Registro::create($request->all());
        return back()->with('success', '¡Registro guardado con éxito!');
    }
}

