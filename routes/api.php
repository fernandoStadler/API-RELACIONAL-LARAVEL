<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::apiResource('funcionarios', FuncionarioController::class);
Route::apiResource('cargos', CargoController::class);