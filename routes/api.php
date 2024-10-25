<?php

use App\Http\Controllers\HospitalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('medicos')->group(function (){
    Route::get('/', [MedicoController::class, 'index']);
    Route::get('/{medico}', [MedicoController::class, 'show']);
});

Route::prefix('hospital')->group(function (){
    Route::get('/', [HospitalController::class, 'index']);
    Route::get('/{hospital}', [HospitalController::class, 'show']);
});
