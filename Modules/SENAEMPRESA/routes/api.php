<?php

use Illuminate\Support\Facades\Route;
use Modules\SENAEMPRESA\Http\Controllers\SENAEMPRESAController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('senaempresas', SENAEMPRESAController::class)->names('senaempresa');
});
