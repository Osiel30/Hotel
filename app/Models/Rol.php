<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $primaryKey = 'id';
    protected $table = 'sistemahotel.roles';
=======
    protected $table = 'roles';
>>>>>>> origin/Erick
    protected $fillable = ['nombre', 'descripcion'];

    public function personal()
    {
        return $this->hasMany(Personal::class, 'id_rol');
    }
}
