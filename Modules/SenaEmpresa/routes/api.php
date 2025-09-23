<?php

use Illuminate\Support\Facades\Route;
use Modules\SenaEmpresa\Http\Controllers\SenaEmpresaController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('senaempresas', SenaEmpresaController::class)->names('senaempresa');
});
