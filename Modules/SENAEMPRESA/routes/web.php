<?php

use Illuminate\Support\Facades\Route;
use Modules\SENAEMPRESA\Http\Controllers\SENAEMPRESAController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('senaempresas', SENAEMPRESAController::class)->names('senaempresa');
});
