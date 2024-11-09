<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'sistemahotel.clientes';
    protected $fillable = ['nombre','apellidos', 'email', 'telefono', 'direccion','password'];
    
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class);
    }
} 
