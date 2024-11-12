<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    protected $table = 'sistemahotel.tipos_pago';
    protected $fillable = [
        'tipo_pago', 
        'descripcion',
    ];
    public function reservaciones()
    {
        return $this->hasMany(Reservacion::class, 'tipo_pago_id');
    }
}
