<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

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

// API CRUD REGISTROS

Route::get('/datos', [FormularioController::class, 'consultarDatos']);
Route::get('/datos/{id}', [FormularioController::class, 'consultarDato']);
Route::post('/registro', [FormularioController::class, 'guardarDatos']);
Route::put('/registro/{id}', [FormularioController::class, 'actualizarDato']);
Route::delete('/registro/{id}', [FormularioController::class, 'eliminarDato']);


