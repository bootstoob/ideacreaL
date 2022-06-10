<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\crearAnuncio;

class CrearAnuncioController extends Controller
{
    public function crearAnuncio(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|string',
            'categoria_id' => 'required|string',
            'subcategoria_id' => 'required|string',
            'nombre' => 'required|string',
            'precio' => 'required|string',
            'forma_contacto' => 'string',
            'fecha_publicacion' => 'string',
            'descripcion' => 'required|string',
        ]);
  
        Anuncio::create([
            'usuario_id' => $request->usuario_id,
            'categoria_id' => $request->categoria_id,
            'subcategoria_id' => $request->subcategoria_id,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'forma_contacto' => $request->forma_contacto,
            'fecha_publicacion' => $request->fecha_publicacion,
            'descripcion' => $request->descripcion,
  
        ]);
  
        return response()->json([
            'message' => 'Anuncio creado correctamente!'
        ], 201);
    }
    
}
