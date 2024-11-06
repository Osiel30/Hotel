<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion', 'telefono', 'ciudad', 'estado'];
    
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class);
    }

    public function personal()
    {
        return $this->hasMany(Personal::class);
    }
}
