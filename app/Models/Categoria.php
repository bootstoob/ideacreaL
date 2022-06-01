<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'nombre_categoria',
        'descripcion',
    ];

    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class);
    }
}
