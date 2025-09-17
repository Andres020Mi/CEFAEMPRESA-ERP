<?php

use Illuminate\Support\Facades\Route;
use Modules\Senaempresa\Http\Controllers\SenaempresaController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('senaempresas', SenaempresaController::class)->names('senaempresa');
});
