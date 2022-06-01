<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\UserRequest;
use App\Models\Registro;
//use App\Models\User;
use App\Models\Usuario;

class RegistroController extends Controller
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
          'nombre' => $request->nombre,
          'email' => $request->email,
          'descripcion' => $request->descripcion,
          'password' => bcrypt($request->password)

      ]);

      return response()->json([
          'message' => 'Successfully created user!'
      ], 201);
  }


  function registrar(Request $request)
  {
    $registroModel = new Registro();
    $usuarioData = $registroModel->getOneUser($request->email);
    if (count($usuarioData) == 0) {
      $data = $registroModel->registroUsuario($request->all());
      // $response['message'] = "Usuario registrado Correctamente";
      // $response['data'] = $request->all();
    }
  }

  //en el controller
  /*
    try {
        $clients = Client::all();
        return response(['clients' => $clients], 200);
    }catch (\Exception $e) {
      return response()->json(['success' => false, 'msg' => 'Ha habido un error']);
      //return response(['success' => false, 'msg' => 'Ha habido un error'],404)


    } 
  /*

      /*
      * Crea un nuevo usuario EJEMPLO
      *
      * @param Request $request
      * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
      */
  public function crear(UserRequest $request)
  {
    try {
      $usuario = new User();
      $usuario->user_id = $request->input('user_id');
      $usuario->fill($request->all());

      $usuario->save();
      $usuario->success = true;
      $usuario->msg = 'Usuario insertado correctamente';
      return response($usuario, 200);
    } catch (\Exception $e) {
      return response()->json(['success' => false, 'msg' => 'Ha habido un error']);
    }
  }

  public function borrar(UserRequest $request)
  {
    try {
      $usuario = new User();

      return response($usuario, 200);
    } catch (\Exception $e) {
      return response()->json(['success' => false, 'msg' => 'Ha habido un error']);
    }
  }

  public function modificar(UserRequest $request)
  {
    try {
      $usuario = new Usuario();

      return response($usuario, 200);
    } catch (\Exception $e) {
      return response()->json(['success' => false, 'msg' => 'Ha habido un error']);
    }
  }
}
