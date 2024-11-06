<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['personal_id', 'rol_id', 'username', 'password'];

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
