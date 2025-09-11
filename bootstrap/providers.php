<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\Filament\AdminPanelProvider::class,


    // paneles de modulos filament
    Modules\Blog\Providers\Filament\TestPanelProvider::class,
    Modules\Blog\Providers\Filament\Panel2PanelProvider::class,
];
