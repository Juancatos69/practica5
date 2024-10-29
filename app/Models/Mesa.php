<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'mesa';

    // Especifica los atributos que se pueden asignar masivamente
    protected $fillable = [
        'material',
        'dimensiones',
        'estilo',
        'color',
    ];
}
