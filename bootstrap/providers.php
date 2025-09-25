<?php

use Modules\Test\Providers\Filament\AdminTestPanelProvider;

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,

    // Paneles de filament en modulos

    Modules\SenaEmpresa\Providers\Filament\AdminPanelProvider::class,
    AdminTestPanelProvider::class,
   
];
