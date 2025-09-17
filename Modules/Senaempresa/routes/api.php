<?php

use Illuminate\Support\Facades\Route;
use Modules\Senaempresa\Http\Controllers\SenaempresaController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('senaempresas', SenaempresaController::class)->names('senaempresa');
});
