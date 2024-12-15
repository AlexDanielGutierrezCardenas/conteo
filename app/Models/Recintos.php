<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recintos extends Model
{
    use HasFactory;
    protected $table = 'mesas_recintos'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_mesas';
    protected $fillable = ['seccion1', 'seccion2', 'asiento_electoral', 'recinto_electoral', 'cantidad_mesas'];
    public $timestamps = false;
    public function votos()
    {
        return $this->hasMany(Votos::class, 'id_mesas');
    }
}
