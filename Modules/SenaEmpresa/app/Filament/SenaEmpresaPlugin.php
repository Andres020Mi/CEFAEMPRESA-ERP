<?php

namespace Modules\SenaEmpresa\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class SenaEmpresaPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'SenaEmpresa';
    }

    public function getId(): string
    {
        return 'senaempresa';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
