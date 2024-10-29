<?php

use App\Http\Controllers\MesaController;
use Illuminate\Support\Facades\Route;

// Definir rutas para el controlador MesaController
Route::apiResource('mesa', MesaController::class);
