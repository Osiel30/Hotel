<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';
    protected $primaryKey = 'id_personal';
    protected $fillable = [
        'nombre', 'puesto', 'turno', 'fecha_ingreso', 'tarea_asignada',
        'hora_entrada', 'hora_salida', 'acceso', 'area_asignada', 'estado',
        'email', 'telefono', 'id_hotel', 'id_rol'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hoteles::class, 'id_hotel');
    }

    public function rol()
{
    return $this->belongsTo(Rol::class, 'id_rol');
}

}
