<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'hotel_id', 'habitacion_id', 'fecha_entrada', 'fecha_salida', 'costo_total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function habitacion()
    {
        return $this->belongsTo(TipoHabitacion::class, 'habitacion_id');
    }
}
