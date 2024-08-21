<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\MaladieController;
use App\Http\Controllers\DoctoreController;
use App\Http\Controllers\PatientPerController;
use App\Http\Controllers\InfermierController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\ServiceController;


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

Route::post('/auth/register', [UserController::class, 'createUser']);
Route::post('/auth/login', [UserController::class, 'loginUser']);

Route::apiResource('maladies', MaladieController::class);
Route::apiResource('doctors', DoctoreController::class);
Route::apiResource('patients', PatientPerController::class);
Route::apiResource('infermiers', InfermierController::class);
Route::apiResource('receptions', ReceptionController::class);
Route::apiResource('services', ServiceController::class);

