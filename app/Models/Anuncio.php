<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    //
    protected $fillable = [
        'id',
        'usuario_id',
        'categoria_id',
        'subcategoria_id',
        'nombre',
        'precio',
        'forma_contacto',
        'fecha_publicacion',
        'descripcion',
    ];


    public function anuncio(){
        return $this->hasMany(Anuncio::class, 'usuario_id');
        return $this->hasMany(Anuncio::class, 'categoria_id');
        return $this->hasMany(Anuncio::class, 'subcategoria_id');
    }
    
    public function comentario(){
        return $this->hasMany(Comentario::class);
    }
    public function contacto(){
        return $this->hasMany(Contacto::class);
    }
    public function imgs_anuncio(){
        return $this->hasMany(Imgs_anuncio::class);
    }
    public function categoria(){
        return $this->hasOne(Categoria::class);
    }
    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }
}
