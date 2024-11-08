<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'mysql.clientes';
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion'];
    
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class);
    }
} 
