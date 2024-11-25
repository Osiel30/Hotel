<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'tiempo_reabastecimiento',
    ];
    public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'proveedor_id');
    }
}
