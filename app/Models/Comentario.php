<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    
    public function anuncio(){
        return $this->hasOne(Anuncio::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
