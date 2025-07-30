<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
    'nombre',
    'apellido',
    'destino',
    'numero_boletos',
    'correo_electronico',
];
}
