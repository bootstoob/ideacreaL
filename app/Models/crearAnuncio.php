<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrearAnuncio
{
    function crearAnuncio($data)
    {

        DB::table('anuncios')->insert($data);
    }

}
