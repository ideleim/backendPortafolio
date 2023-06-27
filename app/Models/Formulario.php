<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    // use HasFactory;
    public $timestamps = false;
    protected $table = 'formulario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'tipo',
        'identificacion',
        'celular',
        'profesion',
        'rol',
    ];
}
