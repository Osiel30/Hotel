<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promociones extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'sistemahotel.promociones';
=======
    protected $table = 'promociones';
>>>>>>> origin/Erick

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
