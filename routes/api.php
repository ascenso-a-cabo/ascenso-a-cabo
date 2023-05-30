<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BloqueControllerAPI;
use App\Http\Controllers\API\CapituloControllerAPI;
use App\Http\Controllers\API\EstadisticaControllerAPI;
use App\Http\Controllers\API\ExamenControllerAPI;
use App\Http\Controllers\API\NotaControllerAPI;
use App\Http\Controllers\API\PreguntaControllerAPI;
use App\Http\Controllers\API\ProvinciaControllerAPI;
use App\Http\Controllers\API\RespuestaControllerAPI;
use App\Http\Controllers\API\TemaControllerAPI;
use App\Http\Controllers\API\UserControllerAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para el controlador BloqueControllerAPI
Route::get('/bloques', [BloqueControllerAPI::class, 'index']);
Route::post('/bloques', [BloqueControllerAPI::class, 'store']);
Route::get('/bloques/{id}', [BloqueControllerAPI::class, 'show']);
Route::put('/bloques/{id}', [BloqueControllerAPI::class, 'update']);
Route::delete('/bloques/{id}', [BloqueControllerAPI::class, 'destroy']);

// Rutas para el controlador CapituloControllerAPI
Route::get('/capitulos', [CapituloControllerAPI::class, 'index']);
Route::post('/capitulos', [CapituloControllerAPI::class, 'store']);
Route::get('/capitulos/{id}', [CapituloControllerAPI::class, 'show']);
Route::put('/capitulos/{id}', [CapituloControllerAPI::class, 'update']);
Route::delete('/capitulos/{id}', [CapituloControllerAPI::class, 'destroy']);

// Rutas para el controlador EstadisticaControllerAPI
Route::get('/estadisticas', [EstadisticaControllerAPI::class, 'index']);
Route::post('/estadisticas', [EstadisticaControllerAPI::class, 'store']);
Route::get('/estadisticas/{id}', [EstadisticaControllerAPI::class, 'show']);
Route::put('/estadisticas/{id}', [EstadisticaControllerAPI::class, 'update']);
Route::delete('/estadisticas/{id}', [EstadisticaControllerAPI::class, 'destroy']);

// Rutas para el controlador ExamenControllerAPI
Route::get('/examenes', [ExamenControllerAPI::class, 'index']);
Route::post('/examenes', [ExamenControllerAPI::class, 'store']);
Route::get('/examenes/{id}', [ExamenControllerAPI::class, 'show']);
Route::put('/examenes/{id}', [ExamenControllerAPI::class, 'update']);
Route::delete('/examenes/{id}', [ExamenControllerAPI::class, 'destroy']);

// Rutas para el controlador NotaControllerAPI
Route::get('/notas', [NotaControllerAPI::class, 'index']);
Route::post('/notas', [NotaControllerAPI::class, 'store']);
Route::get('/notas/{id}', [NotaControllerAPI::class, 'show']);
Route::put('/notas/{id}', [NotaControllerAPI::class, 'update']);
Route::delete('/notas/{id}', [NotaControllerAPI::class, 'destroy']);

// Rutas para el controlador PreguntaControllerAPI
Route::get('/preguntas', [PreguntaControllerAPI::class, 'index']);
Route::post('/preguntas', [PreguntaControllerAPI::class, 'store']);
Route::get('/preguntas/{id}', [PreguntaControllerAPI::class, 'show']);
Route::put('/preguntas/{id}', [PreguntaControllerAPI::class, 'update']);
Route::delete('/preguntas/{id}', [PreguntaControllerAPI::class, 'destroy']);

// Rutas para el controlador ProvinciaControllerAPI
Route::get('/provincias', [ProvinciaControllerAPI::class, 'index']);
Route::get('/provincias/{id}', [ProvinciaControllerAPI::class, 'show']);

// Rutas para el controlador RespuestaControllerAPI
Route::get('/respuestas', [RespuestaControllerAPI::class, 'index']);
Route::post('/respuestas', [RespuestaControllerAPI::class, 'store']);
Route::get('/respuestas/{id}', [RespuestaControllerAPI::class, 'show']);
Route::put('/respuestas/{id}', [RespuestaControllerAPI::class, 'update']);
Route::delete('/respuestas/{id}', [RespuestaControllerAPI::class, 'destroy']);

// Rutas para el controlador TemaControllerAPI
Route::get('/temas', [TemaControllerAPI::class, 'index']);
Route::post('/temas', [TemaControllerAPI::class, 'store']);
Route::get('/temas/{id}', [TemaControllerAPI::class, 'show']);
Route::put('/temas/{id}', [TemaControllerAPI::class, 'update']);
Route::delete('/temas/{id}', [TemaControllerAPI::class, 'destroy']);

// Rutas para el controlador UserControllerAPI
Route::get('/users', [UserControllerAPI::class, 'index']);
Route::post('/users', [UserControllerAPI::class, 'store']);
Route::get('/users/{id}', [UserControllerAPI::class, 'show']);
Route::put('/users/{id}', [UserControllerAPI::class, 'update']);
Route::delete('/users/{id}', [UserControllerAPI::class, 'destroy']);
