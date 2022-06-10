<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\misclases\Response;

class UsuarioController extends Controller
{
    public function getAllUsers()
    {
        $users =  Usuario::all();
        return $users;
    }

    public function getUser(Request $request, $id)
    {
        //$user = '1';
        $user = Usuario::where('id', '=', $id)->firstOrFail();
        return $user;
        /*
        try {
            return response()->json(
                [
                    'user' => $user
                ],
                Response::HTTP_CREATED
            );
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'msg' => "catch del try, no se encuentra Usuario, excepción: " . $e->getMessage()
                ],
                Response::HTTP_NOT_FOUND
            );
        }*/
    }
    public function getUsuarioAnun(Request $request, $id)
    {
        return  Usuario::with("anuncios")->find($id);
    }

}
