<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_tipo', 'descripcion', 'tarifa'];

    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class, 'habitacion_id');
    }
}
