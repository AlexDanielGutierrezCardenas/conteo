<?php

// app/Models/Candidato.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'candidato'; // nombre de tu tabla en la base de datos

    protected $fillable = [
        'nombre_completo',
        'partido',
        'propuesta',
    ];
}

