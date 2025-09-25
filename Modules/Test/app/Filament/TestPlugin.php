<?php

namespace Modules\Test\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TestPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Test';
    }

    public function getId(): string
    {
        return 'test';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
