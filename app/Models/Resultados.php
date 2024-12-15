<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;
    protected $table = 'resultados'; // Nombre de la tabla en tu base de datos
    protected $primaryKey = 'id_resultado';
    public $timestamps = false;
    protected $fillable = [
        'c_hjovanna', 'c_yacira', 'c_norma', 
        'c_efrain', 'c_grover', 'c_marvin', 'c_octavio', 
        'voto_valido', 'voto_blanco', 'voto_nulo', 'voto_emitido'
    ];

}
