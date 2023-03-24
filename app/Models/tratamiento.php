<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tratamiento extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'nombre',
        'FechaN',
        'Sexo',
        'Peso',
        'Alergias',
        'Enfermedad-C',
        'Telefono',
        'email',
        'password',
        'imagenU',
    ];
}
