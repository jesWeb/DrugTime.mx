<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable =[
        'Puesto',
        'Tipo'
    ];

    public function clientes() {
        return $this->hasMany(clientes::class);

    }
}
