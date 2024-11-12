<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    use HasFactory;
    protected $table = 'sistemahotel.reservaciones';
    protected $fillable = [
        'tipo_reserva',
        'id_cliente', 
        'nombre_cliente', 
        'id_hotel', 
        'nombre_hotel', 
        'direccion_hotel',
        'telefono_hotel',
        'tipo_habitacion', 
        'numero_habitacion', 
        'detalles', 
        'insumos', 
        'tarifa', 
        'tipo_pago_id', 
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    
    public function hotel()
    {
        return $this->belongsTo(Hoteles::class, 'id_hotel');
    }

    
    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'tipo_habitacion');
    }

    
    public function tipoPago()
    {
        return $this->belongsTo(TipoPago::class, 'tipo_pago_id');
    }

    
    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'hotel_id', 'id_hotel'); 
    }
}
