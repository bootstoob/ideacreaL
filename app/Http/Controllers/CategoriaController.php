<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    //CATEGORIA
    public function getCategoria_(Request $request, $id)
    {
        try {
            $categoria = Categoria::where('id', '=', $id)->firstOrFail();
            return response()->json(
                [
                    'Categoria' => $categoria
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra Categoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }
    //CATEGORIASSSSS
    public function getCategorias(Request $request)
    {
        try {
            $categoria = Categoria::all();
            return response()->json(
                [
                    'categorias' => $categoria
                ],
                Response::HTTP_CREATED
            );             
            //return $categoria;

        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra Categoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }
    //CATEGORIAs + SUBCATEGORIAS
    public function getCategoriasSub(Request $request)
    {
        /*$subcategorias = DB::table('categorias')
        ->leftjoin('subcategorias', 'categorias.id', '=', 'subcategorias.categoria_id')
        ->select('categorias.id', 'categorias.nombre_categoria', 'subcategorias.categoria_id', 'subcategorias.nombre_subcategoria','subcategorias.id as idsubcat')
        ->get()->toArray();
       return $subcategorias;*/
    
        return  Categoria::with("subcategorias")->get();
        
    }
    //get categoria por ID
    public function getCategoria(Request $request, $id)
    {
        try {
            $categoria = Categoria::where('id', '=', $id)->firstOrFail();
            return response()->json(
                [
                    'categoria' => $categoria
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra categoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }
    //
    /*
    public function getSubcategoriasCategoria(Request $request, $id)
    {
        try {
            $subcategoria = categoria::where('id', '=', $id)->firstOrFail()->subcategoria;
            return response()->json(
                [
                    'subcategoria' => $subcategoria
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra subcategoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }
    }*/

    public function getCategoriaconsubconanun(Request $request, $id){
        //TODO:consulta con eloquent
        //echo $book->author->name;
            $subcategoria=Subcategoria::find($id);
            $subcategoria->anuncios;
            return $subcategoria;

            //return  Subcategoria::with("anuncios")->find($id);

        /* try {
            //->leftjoin('subcategorias', 'categorias.id', '=', 'subcategorias.categoria_id')
            //$subcategoria = subcategoria::where('subcategorias.categoria_id', '=', $categoria_id)->leftjoin('categorias', 'categorias.id', '=', $id)->get();
            
             return response()->json(
                [
                    'subcategoria' => $subcategoria
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra subcategoria, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        } */
    }
}
