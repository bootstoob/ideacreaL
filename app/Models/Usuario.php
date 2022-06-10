<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'email',
        'password',
        'nombre',
        'descripcion',
        'token'
    ];

    //
    
    public function anuncios()
    {
        return $this->hasMany(Anuncio::class);
    }
    public function comentario()
    {
        return $this->hasMany(Usuario::class, 'usuario_id');
    }
}
