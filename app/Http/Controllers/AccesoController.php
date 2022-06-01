<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\misclases\Response;

class AccesoController extends Controller
{
    /**
     * Registro de usuario
     */
    public function registro(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|string|email|unique:usuarios',
            'descripcion' => 'required|string',
            'password' => 'required|string'
        ]);

        Usuario::create([
            'nombre' => $request->name,
            'email' => $request->email,
            'descripcion' => $request->email,
            'password' => bcrypt($request->password)

        ]);

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    /**
     * Inicio de sesión y creación de token
     */
    public function acceso(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            //'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        //DB::enableQueryLog();

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized, usuario no accedido',
            ], Response::HTTP_USUARIO_NO_CREADO);
        $user = $request->user();
        $tokenResult = $user->createToken("1234");
        $token = $tokenResult->token;
        $user->token = $tokenResult->accessToken;
        $user->save();
        
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        
        $token->save();
        return response()->json([
            'token' => $tokenResult->accessToken,
            'token_tipo' => 'Bearer',
            //'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);
        //TODO: crear el token, guardarlo, asegurarse de que lo hay, si hay reemplaza. fecha... y al final devolverlo

    }

    /**
     * Cierre de sesión (anular el token)
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Obtener el objeto User como json
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    //TODO
    public function acceso_(Request $request)
    {
        try {
            return response()->json(['message' => 'acceediendoooo metodo acceso de la clase AccesoController']);
            $usuario = new Usuario();

            return response($usuario, 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => 'Ha habido un error']);
        }
    }
}
