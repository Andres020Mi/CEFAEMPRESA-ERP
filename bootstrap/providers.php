<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\Admin2PanelProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,


    // paneles de filament en modulos

    Modules\Blog\Providers\Filament\PruebaxPanelProvider::class,
    Modules\Blog\Providers\Filament\Panel1PanelProvider::class,
    Modules\Senaempresa\Providers\Filament\SenaEmpresaPanelProvider::class,    
    
];




