<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('alumnos', [AlumnoController::class, 'index']);
Route::post('alumnos', [AlumnoController::class, 'store']);

Route::middleware('validate.alumno.id')->group(function () {
    Route::get('alumnos/{id}', [AlumnoController::class, 'show']);
    Route::put('alumnos/{id}', [AlumnoController::class, 'update']);
    Route::delete('alumnos/{id}', [AlumnoController::class, 'destroy']);
});
