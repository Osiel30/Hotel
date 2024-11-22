<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;

    protected $table = 'sistemahotel.promociones';

    protected $fillable = [
        'nombre',
        'descripcion',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
        'codigo_promocional',
        'descuento',
        'restricciones',
        'activo',
    ];
}
