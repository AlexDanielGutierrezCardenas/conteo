<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images'; // nombre de tu tabla en la base de datos
    protected $primaryKey = 'id_images';
    public $timestamps = false;
    protected $fillable = ['image_path','id_votos_todos','id_mesas'];
}
