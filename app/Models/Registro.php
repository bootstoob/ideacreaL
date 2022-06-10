<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro {
    function registroUsuario($data){

    DB::table('usuarios')->insert($data);
        
    }
    public function getOneUser($email){
        $data = DB::table('usuarios')->where('email', $email)->get();
        return $data;
        if($data === null){
            echo "fallo registro";
        }
    }
}