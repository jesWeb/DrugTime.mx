<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class usersNews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'email',
        'password'
    ];

    public function clientes() {
        return $this->hasMany(clientes::class);

    }
    
}
