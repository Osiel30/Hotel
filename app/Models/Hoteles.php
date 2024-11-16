<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoteles extends Model
{
    use HasFactory;
    protected $table = 'hoteles'; 
    protected $fillable = ['id','nombre', 'direccion', 'telefono', 'ciudad', 'estado']; 

    
    public function habitaciones()
    {
        return $this->hasMany(Habitacion::class, 'hotel_id', 'id');
    }
     
     public function inventarios()
     {
         return $this->hasMany(Inventario::class, 'hotel_id','id');
     }
}
