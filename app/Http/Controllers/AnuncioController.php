<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class AnuncioController extends Controller
{
    //ANUNCIO
    public function getAnuncio(Request $request, $id)
    {
        return Anuncio::findOrFail($id); 
        /*
        try {
            
            return response()->json(
                [
                    'Anuncio' => $anuncio
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra Anuncio, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }*/
    }
}