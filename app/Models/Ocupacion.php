<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'mysql.hoteles'; 
    protected $fillable = ['nombre', 'direccion', 'telefono', 'ciudad', 'estado']; 

    // Relación con habitaciones: un hotel tiene muchas habitaciones
    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class, 'hotel_id', 'id');
    }
}
