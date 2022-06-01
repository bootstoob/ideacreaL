<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgs_anuncio extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'imagen',
        'anuncio_id',
    ];
    public function anuncio(){
        return $this->hasOne(Anuncio::class);
    }
}
