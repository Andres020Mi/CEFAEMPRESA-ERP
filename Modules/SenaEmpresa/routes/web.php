<?php

use Illuminate\Support\Facades\Route;
use Modules\SenaEmpresa\Http\Controllers\SenaEmpresaController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('senaempresas', SenaEmpresaController::class)->names('senaempresa');
});
