<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'categoria_id',
        'nombre_subcategoria',
        'descripcion',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function anuncios(){
        return $this->hasMany(Anuncio::class);
    }
}
