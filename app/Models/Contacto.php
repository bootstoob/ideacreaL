<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'nombre',
        'descripcion',
    ];
    public function anuncios(){
        return $this->belongsTo(Usuario::class);
    }
}
