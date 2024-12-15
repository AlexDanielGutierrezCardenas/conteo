<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotosTodos extends Model
{
    use HasFactory;
    protected $table = 'votos_todos'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_votos';
    public $timestamps = false;
    protected $fillable = [
        'id_mesas','num_mesas', 'c_hjovanna', 'c_yacira', 'c_norma', 
        'c_efrain', 'c_grover', 'c_marvin', 'c_octavio', 
        'voto_valido', 'voto_blanco', 'voto_nulo', 'voto_emitido'
    ];
    // public function recintos()
    // {
    //     return $this->belongsTo(MesasRecintos::class, 'id_mesas');
    // }
    public function mesaRecintos()
    {
        return $this->belongsTo(MesasRecintos::class, 'id_mesas', 'id_mesas');
    }
}
