<?php

namespace App\misclases;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Response{
    const HTTP_CREATED = 201;
    //const HTTP_NOT_FOUND = 123;
    const HTTP_NOT_FOUND = 404;
    const HTTP_USUARIO_NO_CREADO = 401;
}

?>