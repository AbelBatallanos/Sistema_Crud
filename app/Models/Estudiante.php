<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    protected $fillable = ['Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Materia', 'Carrera'];
}
