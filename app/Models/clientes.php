<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class clientes extends Model
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

    //relacion uno a muchos conexion de modelos de fuera  
    //tipo user
    public function typeUser(){
        return $this->belongsTo(typeUser::class);
    }

    public function usersNews(){
        return $this->belongsTo(usersNews::class);
    }

    public function cuidador(){
        return $this->belongsTo(cuidador::class);
    }


    public function tratamiento(){
        return $this->belongsTo(tratamiento::class);
    }
   
    public function medicamento(){
        return $this->belongsTo(medicamento::class);
    }
    
    public function maquina(){
        return $this->belongsTo(maquina::class);
    }

    public function estados(){
        return $this->belongsTo(estados::class);
    }

    

}
