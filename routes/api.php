<?php
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\AnuncioController;
//use App\Http\Controllers\crearAnuncioController;
use App\misclases\response;

Route::group([
    'prefix' => 'auth'
], function () {
    Route::get('/acceso', [AccesoController::class, 'acceso']);
    Route::post('/registro', [App\Http\Controllers\RegistroController::class, 'registro']);
    //Route::post('/cerrarsesion', [AccesoController::class, 'logout']);
    //Route::get('/usuario/{id}/', [UsuarioController::class, 'getUser']);

});
Route::get('/categorias', [CategoriaController::class, 'getCategorias']);
Route::get('/categoriassub', [CategoriaController::class, 'getCategoriasSub']);
Route::get('/subcategoria/{id}', [CategoriaController::class, 'getCategoriaconsubconanun']);
Route::get('/usuario/{id}/', [UsuarioController::class, 'getUsuarioAnun']);
Route::get('/anuncio/{id}', [AnuncioController::class, 'getAnuncio']);
Route::post('/crearanuncio', [App\Http\Controllers\CrearAnuncioController::class, 'crearAnuncio']);
