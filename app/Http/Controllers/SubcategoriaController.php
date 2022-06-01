<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class SubcategoriaController extends Controller
{
    //CATEGORIA
    public function getSubcategoria(Request $request)
    {
        try {
            $subcategoria = Subcategoria::where('id', '=', $id)->firstOrFail();
            return response()->json(
                [
                    'Subcategoria' => $subcategoria
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra Subcategoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }
}
