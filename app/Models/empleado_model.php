<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado_model extends Model
{
    use HasFactory;
    protected $table='empleado';  //agregamos
    protected $fillable=[
        'nombre',
        'apellidos',
        'telefono',
        'correo'
    ];               
}
